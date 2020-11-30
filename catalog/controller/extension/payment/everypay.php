<?php

$GLOBALS = array(
	'urlLive' => 'https://pay.every-pay.eu/api/v3/payments/oneoff',
	'urlTest' => 'https://igw-demo.every-pay.com/api/v3/payments/oneoff',
	'urlLiveStatus' => 'https://pay.every-pay.eu/api/v3/payments/',
	'urlTestStatus' => 'https://igw-demo.every-pay.com/api/v3/payments/',
);

class ControllerExtensionPaymentEveryPay extends Controller {
	protected $globalURLs;

	public function index() {
		include_once DIR_APPLICATION . '../system/library/Everypay.php';
		$this->load->language('extension/payment/everypay');
		$this->load->model('checkout/order');
		$this->load->model('extension/payment/everypay');

		$this->model_extension_payment_everypay->updatePaymentTitle($this->session->data['order_id']);
		$order = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$storeName = $this->config->get('config_name');
		$integration_details = $this->getIntegrationDetails($storeName, VERSION, 'Everypay'.' '.'v1.9'.' '.'module');

		$fields = array(
			'account_name' => $this->config->get('payment_everypay_account_name'),
			'amount' => $order['total'],
			// 'billing_city' => $order['payment_city'],
			'billing_country' => $order['payment_iso_code_2'],
			'billing_line1' => $order['payment_address_1'],
			// 'billing_line2' => $order['payment_address_2'] ? $order['payment_address_2'] : '-',
			// 'billing_postcode' => $order['payment_postcode'],
			'callback_url' => HTTP_SERVER . 'index.php?route=extension/payment/everypay/process',
			'customer_url' => HTTP_SERVER . 'index.php?route=extension/payment/everypay/process',
			// 'shipping_city' => $order['shipping_city'],
			'shipping_country' => $order['shipping_iso_code_2'],
			'shipping_line1' => $order['shipping_address_1'],
			// 'shipping_line2' => $order['shipping_address_2'] ? $order['shipping_address_2'] : '-',
			// 'shipping_code' => $order['shipping_postcode'],
			'shipping_state' => $order['shipping_zone'],
			'email' => $order['email'],
			'order_reference' => $order['order_id'],
			'customer_ip' => $order['ip'],
			'integration_details' => $integration_details
		);

		$everyPay = new Everypay();

		if($this->config->get('payment_everypay_mode')=== 'live') {
			$fields['api_username'] = $this->config->get('payment_everypay_api_username');
			$everyPay->init($this->config->get('payment_everypay_api_username'), $this->config->get('payment_everypay_api_secret'));
		} else {
			$fields['api_username'] = $this->config->get('payment_everypay_test_api_username');
			$everyPay->init($this->config->get('payment_everypay_test_api_username'), $this->config->get('payment_everypay_test_api_secret'));
		}

		$data['checkout_title'] = 'EveryPay';
		$data['form_data'] = $everyPay->getFields($fields, $order['language_code']);

		$url = '';
		//$username = $this->config->get('payment_everypay_test_api_username'); // moved into if clause
		//$password = $this->config->get('payment_everypay_test_api_secret');

		$this->globalURLs =& $GLOBALS;

		if($this->config->get('payment_everypay_mode')=== 'live') {
            $username = $this->config->get('payment_everypay_api_username');
            $password = $this->config->get('payment_everypay_api_secret');
			$data['action'] = 1;
			$url = $this->globalURLs['urlLive'];
		} else {
            $username = $this->config->get('payment_everypay_test_api_username');
            $password = $this->config->get('payment_everypay_test_api_secret');
			$data['action'] = 0;
			$url = $this->globalURLs['urlTest'];
		}

		$request = $this->sendPostRequestWithBasicAuth($url, $data['form_data'], $username, $password);
		$result = json_decode($request);

		$data['payment_url'] = $result->payment_link;

		return $this->load->view('extension/payment/everypay', $data);
	}

	public function getIntegrationDetails($softwareName, $version, $integration) {
		return array(
			 "software" => $softwareName,
			 "version" => $version,
			 "integration" => $integration
		);
	}

	private function sendPostRequestWithBasicAuth($url, $data, $username, $password) {
		$request_body = json_encode($data);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				  'Content-Type: application/json',
				  'Accept: application/json',
				  'Content-Length: ' . strlen($request_body))
		);
		curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	private function sendGetRequestWithAuth($url, $username, $password){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json'
			)
		);
		curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
		$response = curl_exec($ch);
		curl_close($ch);
		return json_decode($response, true);
	}

	private function getPaymentResultUrl($payment_reference, $api_username) {
		$globalURLs = $this->globalURLs =& $GLOBALS;
		$everyPay = new Everypay();

		if($this->config->get('payment_everypay_mode')=== 'live') {
			$everyPay->init($this->config->get('payment_everypay_api_username'), $this->config->get('payment_everypay_api_secret'));
			$url = $globalURLs['urlLiveStatus'];
		} else {
			$everyPay->init($this->config->get('payment_everypay_test_api_username'), $this->config->get('payment_everypay_test_api_secret'));
			$url = $globalURLs['urlTestStatus'];
		}

		return $url . $payment_reference . "?api_username=" . $api_username;
	}

  public function process() {
	  	$this->load->model('checkout/order');
	  	include_once DIR_APPLICATION . '../system/library/Everypay.php';
	  	$everyPay = new Everypay();
	 	$globalURLs = $this->globalURLs =& $GLOBALS;

		if($this->config->get('payment_everypay_mode')=== 'live') {
			$everyPay->init($this->config->get('payment_everypay_api_username'), $this->config->get('payment_everypay_api_secret'));
		} else {
			$everyPay->init($this->config->get('payment_everypay_test_api_username'), $this->config->get('payment_everypay_test_api_secret'));
		}

		$response = $_REQUEST;
		$payment_reference = $_REQUEST['payment_reference'];
		$order_reference = $_REQUEST['order_reference'];
		$response['api_username'] = $this->config->get('payment_everypay_test_api_username');
		$response['api_secret'] = $this->config->get('payment_everypay_api_secret');

		$status = '';

		foreach($response as $key => $value) {
			$status .= "\n$key => $value";
		}

		$stateRequest = $this->sendGetRequestWithAuth($this->getPaymentResultUrl($payment_reference, $response['api_username']), $response['api_username'], $response['api_secret'])["payment_state"];

		$response['payment_state'] = $stateRequest;

		$status = $everyPay->verify($response);

		switch($status) {
			case 1 : $this->model_checkout_order->addOrderHistory($order_reference, $this->config->get('payment_everypay_order_status_id'), '', true);
			$this->response->redirect($this->url->link('checkout/success'));
			break;
			case 2 : $this->model_checkout_order->addOrderHistory($order_reference, 7, '', true);
			$this->response->redirect($this->url->link('checkout/checkout'));
			break;
			case 3 : $this->model_checkout_order->addOrderHistory($order_reference, 10, '', true);
			$this->response->redirect($this->url->link('checkout/failure'));
			break;
			default : $this->response->redirect($this->url->link('checkout/checkout'));
		}
	}
}
