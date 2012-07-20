<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Test extends CI_Controller
{

	private $module, $class, $view_dir;

	public function __construct()
	{
		// core constructor //
		parent::__construct();

		// module //
		$this->module = '';

		// class //
		$this->class = __CLASS__;

		// view directory //
		$this->view_dir = $this->module . '/' . $this->class . '/';
	}

	public function my_view()
	{
		// template vars //
		$data = array(
			'title' => 'Hello dynamic title',
			'content' => $this->load->view($this->view_dir . 'my_view', '', TRUE)
		);

		// load global template //
		$this->load->view('template', $data);
	}
	
	public function another_view()
	{
		// template vars //
		$data = array(
			'title' => 'Another View',
			'content' => $this->load->view($this->view_dir . 'another_view', '', TRUE)
		);

		// load global template //
		$this->load->view('template', $data);
	}	

}