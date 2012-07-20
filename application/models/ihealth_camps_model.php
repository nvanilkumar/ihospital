<?php

class Ihealth_camps_model extends CI_Model
{



//To Insert the data into hospital snap hsot table
public	function add_ihealth_camps()
{
	//dummy variable initalization
		$landline="";
 		$mobile="";
		$fax="";
		
 		//hospital user id
		 //$huserid=$data['userid'];
  		//to upload image
  		
	 $time_from = $this->input->post('time_from_hrs').":".$this->input->post('time_from_mns').":".$this->input->post('time_from_ampm');
	 $time_to = $this->input->post('time_to_hrs').":".$this->input->post('time_to_mns').":".$this->input->post('time_to_ampm');
	
	 
	 $date_from = $this->input->post('date_from');
	 $date_to = $this->input->post('date_to');
	 
	
	
	//insert the address details
	$this->db->select_max('address_id');
	$query = $this->db->get('address');
	
	foreach ($query->result() as $row)
	$addressid=$row->address_id + 1;
	
	$address_data = array(
	'address_id' =>$addressid,
	'address' => $this->input->post('address'),
	'area' =>$this->input->post('location'),
	'city' =>$this->input->post('city'),
	'state'=> $this->input->post('state'),
	'country' =>$this->input->post('country'),
	'pincode' =>$this->input->post('pincode'), 
	);
	
	$this->db->insert('address', $address_data); 
	
	//insert snap shot details
  		 
		 
		
		
		 $count= $this->input->post('lcount');
		 for ($i=1; $i<=$count; $i++)
		{
  	$landline = $landline.$this->input->post('land'.$i.'1') . '-' . $this->input->post('land'.$i.'2') . '-' . $this->input->post('land'.$i.'3') . '-' . $this->input->post('land'.$i.'4').'#';
		} 
		
		
		
   		  $count=$this->input->post('mcount');
		  for ($m=1; $m<=$count; $m++)
		  {
	$mobile = $mobile. $this->input->post('mobile'.$m.'1') . '-' . $this->input->post('mobile'.$m.'2') . '-' . $this->input->post('mobile'.$m.'3') . '-' . $this->input->post('mobile'.$m.'4').'#'; 
		  } 
	
	  $count=$this->input->post('fcount');
		  for ($f=1; $f<=$count; $f++)
		  {
	$fax = $fax. $this->input->post('fax'.$f.'1') . '-' . $this->input->post('fax'.$f.'2') . '-' . $this->input->post('fax'.$f.'3') . '-' . $this->input->post('fax'.$f.'4').'#'; 
		  } 
	 

 
		 $registration_data = array(
			'camp_name' => $this->input->post('camp_name'),
			'time_from' => $time_from,
			'time_to' => $time_to,
			'date_from' => $this->input->post('date_from'),
			'date_to' => $this->input->post('date_to'),
			'addressid' => $addressid,
			'land_mark' => $this->input->post('land_mark'),
			'landline_phone' => $landline,
			'mobile' => $mobile,
			'fax' => $fax,
			'email' => $this->input->post('email'),
			'notes' => $this->input->post('notes'),
		);

		// inserting values into user_details tables
		$insert1 = $this->db->insert('healthcamps', $registration_data);
		return $insert1;

}
			
	 

//to bring the snap shot details
public function snapshot_details($snapid)
{
		$q = $this->db->select('*')->where('hospital_userid', $snapid)->from('hospitalsnapshot')->get();
 		if ($q->num_rows() > 0) 
		{
			foreach ($q->result() as $row)
			{
			$data[] = $row;
 			return $data;
			}//for loop
		}//if 
		
}

public function get($per_page = NULL)
{
		$this->db->select('camp_name, time_from, time_to, date_from, date_to, land_mark, landline_phone, mobile, fax, email, notes');
		$query = $this->db->get('healthcamps', 5, $this->uri->segment(3));
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
			//print_r($data);exit();
			return $data;
		}
		//return $query;
}

public function getAddress()
{
		$this->db->select('address');
		$query = $this->db->get('address');
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
			//print_r($data);exit();
			return $data;
		}
		//return $query;
}

	 
}

//class