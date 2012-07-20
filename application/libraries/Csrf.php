<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Csrf
{

	private $CI;

	public function __construct()
	{
		$this->CI = & get_instance();
	}

	public function token()
	{
		return $this->CI->security->get_csrf_token_name();
	}

	public function hash()
	{
		return $this->CI->security->get_csrf_hash();
	}

}

/**
 * --------------------------------------------------
 * LOCATION
 * --------------------------------------------------
 * ./application/libraries/Csrf.php
 * --------------------------------------------------
 */