<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Auth
{

	private $CI, $redirect;
	public $user_id, $group_type;

	public function __construct()
	{
		$this->CI = & get_instance();
		// initilization //
		$this->init();
	}

	private function init()
	{
		// default redirect //
		$this->redirect = 'home/login';
		// logged user //
		$this->user_id = $this->CI->session->userdata('user_id');
		// group //
		$this->group_type = $this->CI->session->userdata('group_type');
	}

	// redirect to default or given url //
	private function _redirect($redirect, $rurl)
	{
		if ($redirect) {
			redirect(($rurl == '') ? $this->redirect : $rurl);
		}
		return FALSE;
	}

	// check user logged or not //
	public function check_login($redirect = FALSE, $rurl = '')
	{
		if ($this->CI->session->userdata('logged') == TRUE) {
			return TRUE;
		}
		$this->_redirect($redirect, $rurl);
	}

	// redirect the users based on designation //
	public function switcher()
	{
		if ($this->CI->session->userdata('logged')) {
			redirect('dashboard');
		}
		redirect($this->redirect, 'refresh');
	}

	// return secret key on custom length //
	public function salt($count = 10, $table_name = '', $field_name = '', $find = FALSE)
	{

		function unique($count)
		{
			return substr(strtoupper(sha1(uniqid() . $_SERVER['REMOTE_ADDR'] . microtime())), 0, $count);
		}
		
		if ($this->CI->db->table_exists($table_name) && $this->CI->db->field_exists($field_name, $table_name)) {
			while (!$find) {

				$salt = unique($count);

				if ($this->CI->db->select('h.' . $field_name)->from($table_name . ' h')->where('h.' . $field_name, $salt)->get()->num_rows() == 0) {
					$find = TRUE;
				}
			}
		}
		return $salt;
	}

}

/**
 * --------------------------------------------------
 * LOCATION
 * --------------------------------------------------
 * ./application/libraries/Auth.php
 * --------------------------------------------------
 */