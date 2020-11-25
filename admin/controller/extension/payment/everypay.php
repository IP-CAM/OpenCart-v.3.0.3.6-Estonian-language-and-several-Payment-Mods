<?php
class ControllerExtensionPaymentEveryPay extends Controller {

	private $error = array();
	private $version = 'v1.9.3';

	public function index() {
		$this->language->load('extension/payment/everypay');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('setting/setting');
		$this->load->model('localisation/order_status');

		$this->load->model('localisation/language');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_everypay', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true));
		}
		// Setting Form entities
		$data['heading_title'] = $this->language->get('heading_title');
		$data['version'] = $this->version;
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_test'] = $this->language->get('text_test');
		$data['text_live'] = $this->language->get('text_live');
		$data['text_authorization'] = $this->language->get('text_authorization');
		$data['text_capture'] = $this->language->get('text_capture');

		$data['entry_api_username'] = $this->language->get('entry_api_username');
		$data['entry_api_secret'] = $this->language->get('entry_api_secret');
		$data['entry_test_api_username'] = $this->language->get('entry_test_api_username');
		$data['entry_test_api_secret'] = $this->language->get('entry_test_api_secret');
		$data['entry_account_name'] = $this->language->get('entry_account_name');
		$data['entry_mode'] = $this->language->get('entry_mode');
		$data['entry_transaction_type'] = $this->language->get('entry_transaction_type');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['help_total'] = $this->language->get('help_total');
		$data['help_processing_account'] = $this->language->get('help_processing_account');
		$data['help_mode'] = $this->language->get('help_mode');
		$data['help_order_status'] = $this->language->get('help_order_status');
		$data['help_sort_order'] = $this->language->get('help_sort_order');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['action'] = $this->url->link('extension/payment/everypay', 'user_token=' .
			$this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('extension/payment', 'user_token=' .
			$this->session->data['user_token'], true);

		// Errors and Warnings
		if(isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		if(isset($this->error['payment_everypay_api_username'])) {
			$data['error_api_username'] = $this->error['payment_everypay_api_username'];
		} else {
			$data['error_api_username'] = '';
		}
		if(isset($this->error['payment_everypay_api_secret'])) {
			$data['error_api_secret'] = $this->error['payment_everypay_api_secret'];
		} else {
			$data['error_api_secret'] = '';
		}
		if(isset($this->error['payment_everypay_account_name'])) {
			$data['error_account_name'] = $this->error['payment_everypay_account_name'];
		} else {
			$data['error_account_name'] = '';
		}

		// breadcrumbs
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard',
					'user_token=' . $this->session->data['user_token'],
					true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension',
					'user_token=' . $this->session->data['user_token'],
					true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/everypay',
					'user_token=' . $this->session->data['user_token'],
					true));

		// Setting Fields data
		if(isset($this->request->post['payment_everypay_api_username'])) {
			$data['payment_everypay_api_username'] = $this->request->post['payment_everypay_api_username'];
		} else {
			$data['payment_everypay_api_username'] = $this->config->get('payment_everypay_api_username');
		}
		if(isset($this->request->post['payment_everypay_api_secret'])) {
			$data['payment_everypay_api_secret'] = $this->request->post['payment_everypay_api_secret'];
		} else {
			$data['payment_everypay_api_secret'] = $this->config->get('payment_everypay_api_secret');
		}
		if(isset($this->request->post['payment_everypay_account_name'])) {
			$data['payment_everypay_account_name'] = $this->request->post['payment_everypay_account_name'];
		} else {
			$data['payment_everypay_account_name'] = $this->config->get('payment_everypay_account_name');
		}
		if(isset($this->request->post['payment_everypay_mode'])) {
			$data['payment_everypay_mode'] = $this->request->post['payment_everypay_mode'];
		} else {
			$data['payment_everypay_mode'] = $this->config->get('payment_everypay_mode');
		}
		if(isset($this->request->post['payment_everypay_test_api_username'])) {
			$data['payment_everypay_test_api_username'] = $this->request->post['payment_everypay_test_api_username'];
		} else {
			$data['payment_everypay_test_api_username'] = $this->config->get('payment_everypay_test_api_username');
		}
		if(isset($this->request->post['payment_everypay_test_api_secret'])) {
			$data['payment_everypay_test_api_secret'] = $this->request->post['payment_everypay_test_api_secret'];
		} else {
			$data['payment_everypay_test_api_secret'] = $this->config->get('payment_everypay_test_api_secret');
		}
		if(isset($this->request->post['payment_everypay_transaction_type'])) {
			$data['payment_everypay_transaction_type'] = $this->request->post['payment_everypay_transaction_type'];
		} else {
			$data['payment_everypay_transaction_type'] = $this->config->get('payment_everypay_transaction_type');
		}
		if(isset($this->request->post['payment_everypay_total'])) {
			$data['payment_everypay_total'] = $this->request->post['payment_everypay_total'];
		} else {
			$data['payment_everypay_total'] = $this->config->get('payment_everypay_total');
		}
		if(isset($this->request->post['payment_everypay_order_status_id'])) {
			$data['payment_everypay_order_status_id'] = $this->request->post['payment_everypay_order_status_id'];
		} else {
			$data['payment_everypay_order_status_id'] = $this->config->get('payment_everypay_order_status_id');
		}
		if(isset($this->request->post['payment_everypay_geo_zone_id'])) {
			$data['payment_everypay_geo_zone_id'] = $this->request->post['payment_everypay_geo_zone_id'];
		} else {
			$data['payment_everypay_geo_zone_id'] = $this->config->get('payment_everypay_geo_zone_id');
		}
		if(isset($this->request->post['payment_everypay_status'])) {
			$data['payment_everypay_status'] = $this->request->post['payment_everypay_status'];
		} else {
			$data['payment_everypay_status'] = $this->config->get('payment_everypay_status');
		}
		if(isset($this->request->post['payment_everypay_sort_order'])) {
			$data['payment_everypay_sort_order'] = $this->request->post['payment_everypay_sort_order'];
		} else {
			$data['payment_everypay_sort_order'] = $this->config->get('payment_everypay_sort_order');
		}

		//pull in all geo zones the store has
		$this->load->model('localisation/geo_zone');
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		//allow setting different checking heading titles per language
		$languages = $this->model_localisation_language->getLanguages();

		$data['payment_everypay_title'] = array(
			'type' => 'langtext',
			'name' => 'payment_everypay_title',
			'label' => $this->language->get('entry_title'),
			'value' => $this->_getLangValue('payment_everypay_title', $this->config, $this->request->post, $languages),
			'languages' => $languages,
		);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/payment/everypay', $data));
	}

	private function _getLangValue($field, $config, $request, $languages, $default = '') {
		$values = array();
		foreach ($languages as $language) {
			$values[$field . '_' . $language['language_id']] = $this->_getValue($field . '_' . $language['language_id'], $config, $request, $default);
		}
		return $values;
	}

	private function _getValue($field, $config, $request, $default = '') {
		$value = '';
		if (isset($request[$field])) {
			$value = $request[$field];
		} else {
			$value = $config->get($field);
		}
		if ($value === false || $value === null) {
			$value = $default;
		}
		return $value;
	}

	/**
	 * Validates inputs
	*
	* @return bool
	*/
	protected function validate() {
		if(!$this->user->hasPermission('modify', 'extension/payment/everypay'))
			$this->error['warning'] = $this->language->get('error_permission');

		if(!$this->request->post['payment_everypay_api_username'])
			$this->error['payment_everypay_api_username'] = $this->language->get('error_api_username');

		if(!$this->request->post['payment_everypay_api_secret'])
			$this->error['payment_everypay_api_secret'] = $this->language->get('error_api_secret');

		if(!$this->request->post['payment_everypay_account_name'])
			$this->error['payment_everypay_account_name'] = $this->language->get('error_account_name');

		return !$this->error;
	}
}
