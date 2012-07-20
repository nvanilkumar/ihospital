<?php

class Ihospital_model extends CI_Model
{

//To Insert the data into hospital snap hsot table
	public function ihospital_snapshot($data)
	{
		//dummy variable initalization
		$landlinedata = "";
		$mobiledata = "";
		$faxdata = "";
		$dat = "";

		//hospital user id
		$huserid = $data['userid'];
		//to upload image
		$imageurl = "storage/ihospital/" . $data['file_name'];
		$mon = "";
		$tues = "";
		$wed = "";
		$thur = "";
		$fri = "";
		$sat = "";
		$sun = "";
		//insert the opd data in opd table. loop all opd data
		$query = $this->db->select_max('opd_id')->get('opdtimingid');
 
		foreach ($query->result() as $row) {
			$opdid = $row->opd_id + 1;
		}

		$count = count($this->input->post('opd_day1'));
		$opd_day = $this->input->post('opd_day1');

		$day_timing1 = $this->input->post('day_timing1');
		$day_timing2 = $this->input->post('day_timing2');
		$day_timing3 = $this->input->post('day_timing3');
		$day_timing4 = $this->input->post('day_timing4');
		$day_timing5 = $this->input->post('day_timing5');
		$day_timing6 = $this->input->post('day_timing6');

		for ($op = 0; $op < $count; $op++) {

			$da = $opd_day[$op];
			if ($da == "Monday") {
				$mon = $mon . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Tuesday") {
				$tues = $tues . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Wednesday") {
				$wed = $wed . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Thursday") {
				$thur = $thur . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Friday") {
				$fri = $fri . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Saturday") {
				$sat = $sat . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Sunday") {
				$sun = $sun . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			}
		}

		$opd_data = array(
			'opd_id ' => $opdid,
			'type ' => 'hospital',
			'monday' => $mon,
			'tuesday' => $tues,
			'wednesday' => $wed,
			'thursday' => $thur,
			'friday' => $fri,
			'saturday' => $sat,
			'sunday' => $sun,
			'available' => '0'
		);
		$this->db->insert('opdtimingid', $opd_data);


		//insert the address details

		$query = $this->db->select_max('address_id')->get('address');

		foreach ($query->result() as $row) {
			$addressid = $row->address_id + 1;
		}

		$address_data = array(
			'address_id' => $addressid,
			'address' => $this->input->post('address'),
			'area' => $this->input->post('location'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'country' => $this->input->post('country'),
			'pincode' => $this->input->post('pincode'),
		);

		$this->db->insert('address', $address_data);



		$lcount = count($this->input->post('landline1'));
		$landline1 = $this->input->post('landline1');
		$landline2 = $this->input->post('landline2');
		$landline3 = $this->input->post('landline3');
		$landline4 = $this->input->post('landline4');
		//$count= $this->input->post('lcount');
		for ($i = 0; $i < $lcount; $i++) {
			$landlinedata = $landlinedata . $landline1[$i] . '-' . $landline2[$i] . '-' . $landline3[$i] . '-' . $landline4[$i] . '#';
		}



		$mcount = count($this->input->post('mobile1'));
		$mobile1 = $this->input->post('mobile1');
		$mobile2 = $this->input->post('mobile2');
		$mobile3 = $this->input->post('mobile3');
		$mobile4 = $this->input->post('mobile4');
		for ($m = 0; $m < $mcount; $m++) {
			$mobiledata = $mobiledata . $mobile1[$m] . '-' . $mobile2[$m] . '-' . $mobile3[$m] . '-' . $mobile4[$m] . '#';
		}



		$fcount = count($this->input->post('fax1'));
		$fax1 = $this->input->post('fax1');
		$fax2 = $this->input->post('fax2');
		$fax3 = $this->input->post('fax3');
		$fax4 = $this->input->post('fax4');
		for ($f = 0; $f < $fcount; $f++) {
			$faxdata = $faxdata . $fax1[$f] . '-' . $fax2[$f] . '-' . $fax3[$f] . '-' . $fax4[$f] . '#';
		}


		$registration_data = array(
			'hospital_name' => $this->input->post('name'),
			'landline' => $landlinedata,
			'mobile' => $mobiledata,
			'fax' => $faxdata,
			'email' => $this->input->post('email'),
			'website' => $this->input->post('website'),
			'address_id' => $addressid,
			'photourl' => $imageurl,
			'opdid' => $opdid,
			'licenseurl' => '',
			'fees' => $this->input->post('fees'),
			'slideshowimages' => '',
			'doctorscount' => '',
			'verified' => '0',
			'hospital_userid' => $huserid
		);

		// inserting values into user_details tables
		$insert1 = $this->db->insert('hospitalsnapshot', $registration_data);
	}

//to bring the snap shot details
	public function snapshot_details($snapid)
	{
		$q = $this->db->select('*')->where('hospital_userid', $snapid)->from('hospitalsnapshot')->get();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
				return $data;
			}//for loop
		}//if
	}




//insert the press release content
public function pressrelease($data)
{
	
	$pr_data = array(
			'date' => $this->input->post('date'),
			'newsdetails' => $this->input->post('news'),
			'hospitaluserid' => $data['userid']
			 
		);
		$this->db->insert('pressreleases', $pr_data);


	
}//end of pressrelease


//bring the recent 10 press release records
public function recentPressRelease($pr)
{
	  
	$q = $this->db->select('*')->where('hospitaluserid', $pr['userid'])->from('pressreleases')->order_by("pressid", "desc")->limit(10)->get();
 		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
 			}//for loop
  			return $data;
		}//if
		
	
}//endo of recentPR


//bring the recent 10 press release records
public function viewPressRelease($pr)
{
	  
	$q = $this->db->select('*')->where('hospitaluserid', $pr['userid'])->get('pressreleases',$pr['limit'],$this->uri->segment(3));
 		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
 			}//for loop
  			return $data;
		}//if
		
	
}//endo of recentPR


//count the press release records related to particular user
public function viewPressRelease_count($pr)
{
		$q = $this->db->select('*')->where('hospitaluserid', $pr['userid'])->from('pressreleases')->get()->num_rows();
		return $q;

		
}

//edit page data
public function editPressRelease($pr)
{
	$q = $this->db->select('*')->where('pressid', $pr['pressid'])->from('pressreleases')->get();
 		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
 			}//for loop
  			return $data;
		}//if
}


//press release update function
public function updatepressrelease($pr)
{
	$pr_data = array(
			'date' => $this->input->post('date'),
			'newsdetails' => $this->input->post('news'),
 			 
		);
		$this->db->where('pressid', $pr['pressid'])->update('pressreleases', $pr_data);
		
		//echo $this->db->last_query();exit();
}
	


//delete the specified news entry record in press release
public function pressReleaseDelete($id)
{
		$return = $this->db->delete('pressreleases', array('pressid' => $id));
		return $return;
}




//to insert the overview details
public function overview($ovid)
{
	
$unitdata="";
$managementdata="";	
		//unit details data
		$ucount = count($this->input->post('uname'));
		$unitname = $this->input->post('uname');
		$ubeds = $this->input->post('ubeds');
		
		for ($m = 0; $m < $ucount; $m++) {
			$unitdata=$unitdata.$unitname[$m].'-'.$ubeds[$m].'#';
 		}
 		
		//management details data
		$mcount = count($this->input->post('mname'));
		$mnametype = $this->input->post('mnametype');
		$mname = $this->input->post('mname');
		$mdesignation = $this->input->post('mdesignation');
		
		for ($m = 0; $m < $mcount; $m++) {
	$managementdata=$managementdata.$mnametype[$m].'-'.$mname[$m].'-'.$mdesignation[$m].'#';
 		}

  	
	$overview_data = array(
	'hospitaluserid'=>$ovid['userid'],
	'established'=>$this->input->post('established'),
	'beds'=>$this->input->post('totalbeds'), 
	'unitdetails'=>$unitdata,
	'totaldoctors'=>$this->input->post('tdoctors'), 
	'totalresidents'=>$this->input->post('tresidents'), 
	'management'=>$managementdata,
	'facilities'=>$this->input->post('facilites'), 
	'overview'=>$this->input->post('overview'), 
	'achievements'=>$this->input->post('achievements'), 
	'consultants'=>$this->input->post('tconsultants')
		);

		// inserting values into user_details tables
		$insert1 = $this->db->insert('hospitaloverview', $overview_data);
	
	return $insert1;
}


//to bring the overview data
public function overview_details($ovdetails)
{
	
	$q = $this->db->select('*')->where('hospitaluserid', $ovdetails['userid'])->from('hospitaloverview')->get();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
 			}//for loop
			return $data;
		}//if
}

//to update the overview data
public function overview_update($ovdetails)
{
	
	$unitdata="";
$managementdata="";	
		//unit details data
		$ucount = count($this->input->post('uname'));
		$unitname = $this->input->post('uname');
		$ubeds = $this->input->post('ubeds');
		
		for ($m = 0; $m < $ucount; $m++) {
			$unitdata=$unitdata.$unitname[$m].'-'.$ubeds[$m].'#';
 		}
 		
		//management details data
		$mcount = count($this->input->post('mname'));
		$mnametype = $this->input->post('mnametype');
		$mname = $this->input->post('mname');
		$mdesignation = $this->input->post('mdesignation');
		
		for ($m = 0; $m < $mcount; $m++) {
	$managementdata=$managementdata.$mnametype[$m].'-'.$mname[$m].'-'.$mdesignation[$m].'#';
 		}

	
	
	
	$overview_data = array(
	'hospitaluserid'=>$ovdetails['userid'],
	'established'=>$this->input->post('established'),
	'beds'=>$this->input->post('totalbeds'), 
	'unitdetails'=>$unitdata,
	'totaldoctors'=>$this->input->post('tdoctors'), 
	'totalresidents'=>$this->input->post('tresidents'), 
	'management'=>$managementdata,
	'facilities'=>$this->input->post('facilites'), 
	'overview'=>$this->input->post('overview'), 
	'achievements'=>$this->input->post('achievements'), 
	'consultants'=>$this->input->post('tconsultants')
		);

		// inserting values into user_details tables
		$insert1 = $this->db->update('hospitaloverview', $overview_data);
	
 	
	
}


//to insert the slide show images
public function slideshow_insertimages($sl)
{
	$oldimagesurls="";//to store old image data
	$newimages="";//to store new image urls
	
	//print_r($sl); exit();
	
	//images exist bring the old data
	if($sl ['imagedata'] ['imagecount']>=1)
	{
			$q = $this->db->select('*')->where('hospital_userid', $sl['userid'])->from('hospitalsnapshot')->get();
			if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$oldimagesurls = $row->slideshowimages;
 			}//for loop
			}//if
	
		
	}
	
	$newimages=$oldimagesurls.$sl['imageurls'];
	$overview_data = array(
	'hospital_userid'=>$sl['userid'],
	'slideshowimages'=>$newimages
		);
	
	$insert1 = $this->db->update('hospitalsnapshot', $overview_data);
	
}
//to count the existing images count
public function slideshow_imagecount($sl)
{
	$images="";//to store image urls 
	$q = $this->db->select('*')->where('hospital_userid', $sl['userid'])->from('hospitalsnapshot')->get();
	//echo $this->db->last_query();exit();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$images = $row->slideshowimages;
 			}//for loop
			$this->load->helper('slideshow');
			$data['imagecount']=slideshowimagecount($images);
			$data['imageurl']=$images;
			
			
			return $data;
		}//if
	
}


//to remove slide show image 
public function slideshow_removeimage($sl)
{
	
	
	$q = $this->db->select('*')->where('hospital_userid', $sl['userid'])->from('hospitalsnapshot')->get();
	//echo $this->db->last_query();exit();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$images = $row->slideshowimages;
 			}//for loop
		}//if 
		
		$this->load->helper('slideshow');
		$newimages=slideshowimageurl($images,$sl['imagepath']);
		echo "hi";
		
		//insert the new image url
 	$overview_data = array(
	'hospital_userid'=>$sl['userid'],
	'slideshowimages'=>$newimages
		);
	
	$insert1 = $this->db->update('hospitalsnapshot', $overview_data);
 }



//to insert the docotor details
public function adddoctor($hosdetails)
{
	$landlinedata="";//to store land line data
	$mobiledata="";//to store mobile data
	$opdid="";//opd id
	//temp variables to store relevent day data
	$mon = "";
	$tues = "";
	$wed = "";
	$thur = "";
	$fri = "";
	$sat = "";
	$sun = "";
	
	//opd data
	//bring the max opdid, than insert the opd data
		//insert the opd data in opd table. loop all opd data
		$query = $this->db->select_max('opd_id')->get('opdtimingid');
 
		foreach ($query->result() as $row) {
			$opdid = $row->opd_id + 1;
		}

		$count = count($this->input->post('opd_day1'));
		$opd_day = $this->input->post('opd_day1');

		$day_timing1 = $this->input->post('day_timing1');
		$day_timing2 = $this->input->post('day_timing2');
		$day_timing3 = $this->input->post('day_timing3');
		$day_timing4 = $this->input->post('day_timing4');
		$day_timing5 = $this->input->post('day_timing5');
		$day_timing6 = $this->input->post('day_timing6');

		for ($op = 0; $op < $count; $op++) {

			$da = $opd_day[$op];
			if ($da == "Monday") {
				$mon = $mon . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Tuesday") {
				$tues = $tues . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Wednesday") {
				$wed = $wed . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Thursday") {
				$thur = $thur . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Friday") {
				$fri = $fri . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Saturday") {
				$sat = $sat . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			} else if ($da == "Sunday") {
				$sun = $sun . $day_timing1[$op] . '-' . $day_timing2[$op] . '-' . $day_timing3[$op] . '/' . $day_timing4[$op] . '-' . $day_timing5[$op] . '-' . $day_timing6[$op] . '#';
			}
		}//for loop

		$opd_data = array(
			'opd_id ' => $opdid,
			'type ' => 'hospital',
			'monday' => $mon,
			'tuesday' => $tues,
			'wednesday' => $wed,
			'thursday' => $thur,
			'friday' => $fri,
			'saturday' => $sat,
			'sunday' => $sun,
			'available' => '0'
		);
		$this->db->insert('opdtimingid', $opd_data);

	
	
	//phone no's insert
	
	$lcount = count($this->input->post('landline1'));
		$landline1 = $this->input->post('landline1');
		$landline2 = $this->input->post('landline2');
		$landline3 = $this->input->post('landline3');
		$landline4 = $this->input->post('landline4');
		//$count= $this->input->post('lcount');
		for ($i = 0; $i < $lcount; $i++) {
			$landlinedata = $landlinedata . $landline1[$i] . '-' . $landline2[$i] . '-' . $landline3[$i] . '-' . $landline4[$i] . '#';
		}



		$mcount = count($this->input->post('mobile1'));
		$mobile1 = $this->input->post('mobile1');
		$mobile2 = $this->input->post('mobile2');
		$mobile3 = $this->input->post('mobile3');
		$mobile4 = $this->input->post('mobile4');
		for ($m = 0; $m < $mcount; $m++) {
			$mobiledata = $mobiledata . $mobile1[$m] . '-' . $mobile2[$m] . '-' . $mobile3[$m] . '-' . $mobile4[$m] . '#';
		}



	
	
	$doctor_data = array(
 	'doctorname'=>$this->input->post('docname'),
	'speciality'=>$this->input->post('speciality'),
	'opdid'=>$opdid,
	'email'=>$this->input->post('email'),
	'landline'=>$landlinedata,
	'mobile'=>$mobiledata,
	'doctorprofileurl'=>'',
	'adminstatus'=>'not verified',
	'status'=>'not available',
	'hospitaluserid'=>$hosdetails['userid']
 		);
	
	$insert1 = $this->db->insert('hospitaldoctors', $doctor_data);
//	$this->db
}





//to bring the address details
	public function address_details($addid)
	{
		$q = $this->db->select('*')->where('address_id', $addid)->from('address')->get();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
 			}//for loop
			return $data;
		}//if
	}

//address end
// to bring the opd details

	public function opd_details($opdid)
	{
		$q = $this->db->select('*')->where('opd_id', $opdid)->from('opdtimingid')->get();
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			
			}//for loop
				return $data;
		}//if
	}

//address end
}

//class