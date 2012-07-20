<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ihealth_camps extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $module, $class, $view_dir;
	private  $gallery_path;
	private  $gallery_path_url;
	 
	public function __construct()
	{
		parent::__construct();
		
		// module //
		$this->module = '';
 		// class //
		$this->class = __CLASS__;
 		// view directory //
		$this->view_dir = $this->module . '/' . $this->class . '/';
 		$this->load->model('ihealth_camps_model');
		
 		
	}
	public function index()
	{
	}
	 
	public function healthcamps()
	{
		if($this->input->post('ihealth_camps'))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			$this->form_validation->set_rules('camp_name', 'Camp Name', 'trim|required');
			
			
			if ($this->form_validation->run() === FALSE) 
			{
				$data['title']="IHUS";
				$data['status'] = "<span style='color:red;font_size:25px;'>Validation Failed  ...!</span>";
				$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
				$data['content'] = $this->load->view($this->view_dir . 'ihealth_camps', $data, TRUE);
				// load global template //
				$this->load->view('template', $data);
				
				 
			}//if succuss
			else 
			{
				if($get_result = $this->ihealth_camps_model->add_ihealth_camps()) 
				 {
					 $data['title']="IHUS";
					$data['status'] = "<span style='color:green;font_size:25px;'>Health Camp Added Succufully ...!</span>";
					 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
					 $data['content'] = $this->load->view($this->view_dir . 'ihealth_camps', $data, TRUE);
					 $this->load->view('template', $data); 
				 
				}//image else
				else{
					$data['status'] = "<span style='color:red;font_size:25px;'>Health  Camp is not Added  ...!</span>";
					$data['title']="IHUS";
					$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
					$data['content'] = $this->load->view($this->view_dir . 'ihealth_camps', $data, TRUE);
				}
			}//end of if
		}else
		{
			$data['title']="IHUS";
			$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
			$data['content'] = $this->load->view($this->view_dir . 'ihealth_camps', $data, TRUE);
			// load global template //
			$this->load->view('template', $data);
		}
  	}//snap shot method 
	
public function view_ihealth_camps()
{
	$this->load->library('pagination');
		$this->load->library('table');

		$config['base_url'] =  base_url()."ihealth_camps/view_ihealth_camps";
		$config['total_rows'] = $this->db->get('healthcamps')->num_rows();
		$config['per_page'] = 5; 
		$config['num_links'] = 10;
		
		$config['first_tag_open'] = '<div style="background-color:red">';
		$config['first_tag_close'] = '</div>';
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->ihealth_camps_model->get(5);
		$add = $this->ihealth_camps_model->getAddress(5);
		//print_r($add);exit();
		foreach($add as $address)
		{
			//print_r($address);
			$ad[]=$address->address;
			
		}//print_r($ad);exit();
		
		//$data['address'] = $ad;
		
	
	$data['title']="IHUS";
	$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
	$data['content'] = $this->load->view($this->view_dir . 'view_ihealth_camps', $data, TRUE);
	// load global template //
	$this->load->view('template', $data);
}
	
	
 	
}// End of Class

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */