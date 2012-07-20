<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ihospital extends CI_Controller 
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
 		$this->load->model('ihospital_model');
		//form validations
		$this->load->library('form_validation');

		
 		
	}
	 
	public function index()
	{
		// load helper in controller
	//	$this->load->helper('sample');
		//echo demo();
		//exit();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
 		$this->form_validation->set_rules('name', 'First Name', 'trim|required');
 		
		$data = array(
 			'title' => 'Ihus Hospital'
				);
		
		 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
		
		
		
		if ($this->form_validation->run() === FALSE) 
		{
 			$data['error']="";
 			$data['content'] = $this->load->view($this->view_dir . 'ihospital_snapshot', $data, TRUE);
			// load global template //
			$this->load->view('template', $data);
			
			 
		}//form data if
		else 
		{
			$path = FCPATH. 'storage/ihospital';
 			$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $path,
			'height' => '2000',
			'width'=> '2000',
			'max_size' => 2000
			);
		 	$this->load->library('upload', $config);
 			if ( ! $this->upload->do_upload('hospitallogo'))
			{
			 	$data['error'] =  $this->upload->display_errors();
 				 $data['content'] = $this->load->view($this->view_dir . 'ihospital_snapshot', $data, TRUE);
				 // load global template //
				   $this->load->view('template', $data);
 			
			}//image if
			
			else//image uploaded with out any errors
			{
			// Upload Image data	
			//print_r($this->input->post()); exit();			
			 $data = $this->upload->data();
			 //hospital user id
			 $data['userid']="1";
			 
  			 $get_result = $this->ihospital_model->ihospital_snapshot($data);
			 
 			 $data['content'] = $this->load->view($this->view_dir . 'sucess', $data, TRUE);
			 $this->load->view('template', $data); 
			 
			}//image else
 			
   			 
		}//form data else

		
		
  	}//snap shot method 
	
	public function snapshot_edit()
	{
		$id="1";
			$data = array('title' => 'Ihus Hospital');
				 
 		$data['details'] = $this->ihospital_model->snapshot_details($id);
		 	foreach ($data['details'] as $row)
			{
				   $addid=$row->address_id;
				   $opdid=$row->opdid;
			}	 
		$data['address']  = $this->ihospital_model->address_details($addid);
		$data['opddetails'] =$this->ihospital_model->opd_details($opdid);
		
		//print_r($data);exit();
		 
		$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);
		
			 $data['title'] = 'Ihus Hospital';
 			 $data['content'] = $this->load->view($this->view_dir . 'ihospital_snapshot_edit', $data, TRUE);
			 $this->load->view('template', $data); 

	}//edit method
	
	//overview add
	public function overview()
	{
		     $data = array('title' => 'Ihus Hospital'); 
 			 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);				
			$data['submit_status']='';	
			$data['userid']="1";//session variable
			
			 if($this->input->post('submit')){//after submitted the form
  				
				$data['submit_status']='successfully submitted the data';	
				
				//print_r($_POST);exit();		
 			    $get_result = $this->ihospital_model->overview($data);
 				$data['content'] = $this->load->view($this->view_dir . 'sucess', $data, TRUE);  	
			    $this->load->view('template', $data); 
  			}
			else
			{
			 
			 $data['content'] = $this->load->view($this->view_dir . 'overview', $data, TRUE);  	
			 $this->load->view('template', $data); 
			}
	}
	
	//overview edit
	public function overview_edit()
	{
		     $data = array('title' => 'Ihus Hospital'); 
 			 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);				
			$data['submit_status']='';	
			$data['userid']="1";//session variable
			
			 if($this->input->post('submit')){//after submitted the form
  				
				$data['submit_status']='successfully submitted the data';	
				
				//print_r($_POST);exit();		
 			    $get_result = $this->ihospital_model->overview_update($data);
				$data['record'] = $this->ihospital_model->overview_details($data);
 				$data['content'] = $this->load->view($this->view_dir . 'overview_edit', $data, TRUE);  	
			    $this->load->view('template', $data); 
  			}
			else
			{
			 
			 	//bring the data from the model
			 
			 $data['record'] = $this->ihospital_model->overview_details($data);
			 $data['content'] = $this->load->view($this->view_dir . 'overview_edit', $data, TRUE);  	
			 $this->load->view('template', $data); 
			}
	}
	
	
	public function test()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
 		$this->form_validation->set_rules('name', 'First Name', 'trim|required');
 		
		$data = array(
 			'title' => 'Ihus Hospital'
				);
			 $data['files']="";	
	 
        $config['upload_path'] = FCPATH. 'storage/multi';//'./uploads/'; // server directory
        $config['allowed_types'] = 'gif|jpg|png'; // by extension, will check for whether it is an image
        $config['max_size']    = '1000'; // in kb
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        $this->load->library('Multi_upload');
    
        $files = $this->multi_upload->go_upload();
		
		
		
 		if ($this->form_validation->run() === FALSE) 
		{
 			$data['error']="";
			
			 $data['files'] =  $files;
          //  $this->load->view('upload_success', $data);
 			$data['content'] = $this->load->view($this->view_dir . 'test', $data, TRUE);
			// load global template //
			$this->load->view('template', $data);
			
			 
		}//form data if
		else 
		{
	          $data['content'] = $this->load->view($this->view_dir . 'test', $data, TRUE);
			  // load global template //
			 $this->load->view('template', $data);
 		}
		
		     
	}
	//press release  for add view
	public function pressrelease()
	{
		    $data = array('title' => 'Ihus Hospital');
			$data['submit_status']='';	
			$data['userid']="1";//session variable
			
			if($this->input->post('submit')){//after submitted the form
  				
				$data['submit_status']='successfully submitted the data';			
 			    $get_result = $this->ihospital_model->pressrelease($data);
  			}
 			 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
			 $data['recentnews']=$this->ihospital_model->recentPressRelease($data);	 
 			// print_r($data); exit();
			 $data['content'] = $this->load->view($this->view_dir . 'pressrelease', $data, TRUE);  	
			 $this->load->view('template', $data); 
			
			 
    		 
		  
 			
	}//end of press release
	
	
	//press release edit
	public function pressrelease_view()
	{
		    $data = array('title' => 'Ihus Hospital');
			$data['submit_status']='';	
			$data['userid']="1";//session variable
 			 
			// loading pagination library //
			$this->load->library('pagination');
			//$this->load->library('table');
			
			// defining $config variables //
			$config['base_url'] =  base_url()."ihospital/pressrelease_view";
			$config['total_rows'] = $this->ihospital_model->viewPressRelease_count($data);
 			$config['per_page'] = 5; 
			$config['num_links'] = 10;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			
			// initializing pagination  
			$this->pagination->initialize($config);
			
			// getting records from table 
			$data['limit']=5;
 				
 			 
			
			// loading template //
			
			 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
			 $data['recentnews']=$this->ihospital_model->viewPressRelease($data);	 
 			// print_r($data); exit();
			 $data['content'] = $this->load->view($this->view_dir . 'pressrelease_view', $data, TRUE);  	
			 $this->load->view('template', $data); 
 		 
			
  			
 		  
 			
	}//end of press release
	
	
//delete the press release
public function deletePressRelease($id)
{
		if($this->ihospital_model->pressReleaseDelete($id))
		{
			$this->session->set_userdata('status','the row you selected is deleted');
			redirect('ihospital/pressrelease_view');
		}else
		{
			redirect('ihospital/pressrelease_view');
		}
			
} // end of delete_question
			 
//press release  for add view 
	public function pressrelease_edit($id)
	{
 		    $data = array('title' => 'Ihus Hospital');
 			$data['userid']="1";//session variable
						  $data['pressid']=$id;
			$data['submit_status']='';		

			if($this->input->post('submit')){//after submitted the form
  				
				$data['submit_status']='successfully updated the data';	
				//print_r($data);exit();		
 			    $get_result = $this->ihospital_model->updatepressrelease($data);
    			}
 			 $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
			 $data['editdata']=$this->ihospital_model->editPressRelease($data);	 
			 $data['content'] = $this->load->view($this->view_dir . 'pressrelease_edit', $data, TRUE);  	
			 $this->load->view('template', $data); 
			
			 
    		 
		  
 			
	}//end of press release
	   

//slide show images
public function slideshow()
{
	$data = array('title' => 'Ihus Hospital');//page title
 	$data['userid']="1";//session variable
	
	$data['imagedata']=$this->ihospital_model->slideshow_imagecount($data);
	$data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
	//$data['editdata']=$this->ihospital_model->editPressRelease($data);	 
	$data['content'] = $this->load->view($this->view_dir . 'slideshow', $data, TRUE);  	
	$this->load->view('template', $data); 
}

//to insert images
public function slideshowinsert()
{
	
	  $data = array('title' => 'Ihus Hospital');//page title
 	  $data['userid']="1";//session variable
	  
	    $data['files']="";	//previous files
		$slidedata="";//temp variable to store image urls
		//config the image load 
        $config['upload_path'] = FCPATH. 'storage/multi/';//'./uploads/'; // server directory
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // by extension, will check for whether it is an image
        //$config['max_size']    = '1000'; // in kb
       // $config['max_width']  = '1024';
        //$config['max_height']  = '768';

		//load the libraries	
        $this->load->library('upload', $config);
        $this->load->library('Multi_upload');
    
        
	//no of images 
	$data['imagedata']=$this->ihospital_model->slideshow_imagecount($data);
	
	//print_r($slideshow);exit();
	
	if($this->input->post('submit')){//after submitted the form
	
	
		//brings the all uploaded file names and path
		 $files = $this->multi_upload->go_upload();
 		 
 		 foreach($files as $file){
		 $slidedata.='storage/multi/'.$file['name'].'#';
   		 } 
		//stores the values in db
		$data['imageurls']=$slidedata;
		$this->ihospital_model->slideshow_insertimages($data);
	  
			redirect('ihospital/slideshow'); 
	}
	
	
}
	
//function to deleted the selected image
public function deleteimage($image, $image2, $image3)
{
	 $data = array('userid' => '1');//session variable
	 //$data['userid']="1";
	 
	$data['imagepath']=$image."/".$image2."/".$image3;
 	$filename=FCPATH.$data['imagepath'];
	 
	//check for file existence
	if (file_exists($filename))
	{
		unlink($filename);
 		//remove the link the database
		$this->ihospital_model->slideshow_removeimage($data);
	}
	$this->ihospital_model->slideshow_removeimage($data);
		 redirect('ihospital/slideshow'); 
}
	
//add doctor view
public function adddoctor()
{
	
	 $data = array('title' => 'Ihus Hospital');//page title
 	  $data['userid']="1";//session variable
	  if($this->input->post('submit')){//after submitted the form
	  
	  		$this->ihospital_model->adddoctor($data);

	  print_r($_POST);exit();
	  }
	  
	  $data['left_pan'] = $this->load->view($this->view_dir . 'left_pan', '', TRUE);		
 	$data['content'] = $this->load->view($this->view_dir . 'adddoctor', $data, TRUE);  	
	$this->load->view('template', $data); 
	  
}
	
 	
}// End of Class

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */