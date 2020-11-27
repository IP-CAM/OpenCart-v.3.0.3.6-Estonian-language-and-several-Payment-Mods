<?php
class Everypay {
	const _VERIFY_SUCCESS = 1; // payment successful
	const _VERIFY_CANCEL = 2;  // payment cancelled
	const _VERIFY_FAIL = 3;    // payment failed

	private $api_username;
	private $api_secret;
	private $request_cc_token;
	private $cc_token;
	private $statuses = array(
		'settled'                 => self::_VERIFY_SUCCESS,
		'authorised'              => self::_VERIFY_SUCCESS,
		'cancelled'               => self::_VERIFY_CANCEL,
		'waiting_for_3ds_response'=> self::_VERIFY_CANCEL,
		'failed'                  => self::_VERIFY_FAIL
	);

	/**
	* Initiates a payment.
	*
	* Expects following data as input:
	* 'api_username' => api username,
	* 'api_secret => api secret,
	* array(
	*  'request_cc_token' => request to get cc_token 1,
	*  'cc_token' => token referencing a bank card
	* )
	*
	* @param $api_username string
	* @param $api_secret string
	* @param $data array
	* @example $everypay->init('api_username', 'api_secret', array('cc_token' => 'token'));
	*
	* @return Everypay
	*/

	public function init($api_username, $api_secret, $data = '')
	{
		$this->api_username = $api_username;
		$this->api_secret = $api_secret;

		if (isset($data['request_cc_token'])) {
			$this->request_cc_token = $data['request_cc_token'];
		}

		if (isset($data['cc_token'])) {
			$this->cc_token = $data['cc_token'];
		}
	}

	public function getFields(array $data, $language = 'et')
	{
		$data['api_username'] = $this->api_username;
		$data['nonce'] = $this->getNonce();
		$data['timestamp'] = date("Y-m-d").'T'.date("H:i:s").'.000Z';
		$data['transaction_type'] = 'charge';

		if (isset($this->request_cc_token)) {
			$data['request_cc_token'] = $this->request_cc_token;
		}

		if (isset($this->cc_token)) {
			$data['cc_token'] = $this->cc_token;
		}

		$data['locale'] = "et";

		return $data;
	}

	public function verify(array $data)
	{
		if ($data['api_username'] !== $this->api_username) {
			throw new Exception('Invalid username.');
		}

		$status = !empty($data['payment_state']) ? $this->statuses[$data['payment_state']] : false;

		$verify = array();

		return $status;
	}


	protected function getNonce()
	{
		return uniqid(true);
	}

	protected function verifyNonce($nonce)
	{
		return true;
	}
}