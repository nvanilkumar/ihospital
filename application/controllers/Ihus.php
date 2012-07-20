<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ihus extends CI_Controller
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
		
		// Loads the model
		$this->load->model('ihus_model');
	}
	
	//registration method
	public function index()
	{
 		//loading the form validator
	 	$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('username', 'First Name', 'trim|required');
		
		// captcha library
		$this->load->library('recaptcha');
		
		//
		$this->load->library('email');
  		
		//form submitted with errors
		 if ($this->form_validation->run() === FALSE) 
		{
			 
			
			$data = array(
			'main' => $this->ihus_model->mainCategoiries(),
			'sub' => $this->ihus_model->userType(),
			'title' => 'Ihus Registration Form'
				);
 			//$this->load->view($this->view_dir . 'user_registration', $data);
			
			 $data['content'] = $this->load->view($this->view_dir . 'user_registration', $data, TRUE);
			$this->load->view('template', $data);
			// load global template //
			//$this->load->view('template', $data);
			
			
		} 
		else // with out any errors 
		{ 
			//send data to the model
			 $data = array(
 			'title' => 'Ihus Registration Form'
				);
 			 $get_result = $this->ihus_model->user_registration();
			 
			/*  //mail intigration
			 
			 	$this->email->from('admin@ihus.com', 'admin');
				$this->email->to($this->input->post('email')); 
  				$this->email->subject('Registration Mail From Ihus');
				$this->email->message('registration details');	
 				
				// Send e-mail
    			if($this->email->send()) { // Mail was sent succesfully
        			echo '<h1>mail was sent to  recipients</h1>';
    			}
    			else { // Mail was not sent
       			 echo '<h1>Mail could not be sent</h1>';
   			    }
*/
			 
  			 $data['content'] = $this->load->view($this->view_dir . 'sucess', $data, TRUE);
			$this->load->view('template', $data);
		 }
		
 		
		
	}//end of index

	//remote validation method for email
	public function check_email_availablity()
	{
		
  		 $get_result = $this->ihus_model->check_email_availablity();
		if ($get_result)
			$data['status'] = "true";
		else
			$data['status'] = "false";
			
		$data['content'] = $this->load->view('check_email_availablity', $data);
 		$this->load->view('template', $data);  
	}

	//remote validation method for username
	public function check_username_availablity()
	{
 		$get_result = $this->ihus_model->check_username_availablity();

		if ($get_result) {
			$data['status'] = "true";
		} else {
			$data['status'] = "false";
		}
		// for all ajax call //
		$this->load->view($this->view_dir . 'check_username_availablity', $data);
		//$this->load->view('template', $data);

	}

	
	
	
	
	 
}