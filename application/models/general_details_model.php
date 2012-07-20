<?php

class General_details_model extends CI_Model
{


 //To Bring the particular address record
public function address($addid)
{
 
   		$q = $this->db->select('*')->where('address_id', $addid)->from('address')->get();
 		if ($q->num_rows() > 0) 
		{
			foreach ($q->result() as $row)
			{
			$data[] = $row;
			return $data;
			}//for loop
		}//if 
		
}

//To bring the particular Opd Record 
public function opddata($opdid)
{
	$q = $this->db->select('*')->where('opd_id', $opdid)->from('opdtimingid')->get();
 		if ($q->num_rows() > 0) 
		{
			foreach ($q->result() as $row)
			{
			$data[] = $row;
			return $data;
			}//for loop
		}//if 
	
}


}

//class