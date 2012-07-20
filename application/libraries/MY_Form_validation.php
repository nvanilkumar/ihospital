<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * Form Validation Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Validation
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/form_validation.html
 */
class MY_Form_validation extends CI_Form_validation
{

	/**
	 * Constructor
	 */
	public $CI;

	public function __construct()
	{
		$this->_error_prefix = '<label>';
		$this->_error_suffix = '</label>';

		parent::__construct();
	}

	function run($module = '', $group = '')
	{
		(is_object($module)) && $this->CI = & $module;
		return parent::run($group);
	}

}