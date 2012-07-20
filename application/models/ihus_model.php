<?php

class Ihus_model extends CI_Model
{

	//brings the main categories of the user type list box
	public function userType()
	{
		$this->db->select('*');
		$this->db->from('usercategories');
		$this->db->where('status <=', '1');
		$this->db->where('parentcatid >', '0');
		$q = $this->db->get();

		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;

				//echo $row->catname."<br />";
			}




			return $data;
		}
	}

	//brings the sub categories of the user type list box
	public function mainCategoiries()
	{
		$this->db->select('*');
		$this->db->from('usercategories');
		$this->db->where('status >= ', '0');
		$this->db->where('parentcatid ', '0');
		$q = $this->db->get();

		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
				$data[] = $row;
			return $data;
		}
	}

//function
	//email validation
	public function check_username_availablity()
	{
		// $email = trim($this->input->post('email'));
		$username = $this->input->post('username');

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$q = $this->db->get();
		if ($q->num_rows() > 0)
			return false;
		else
			return true;
	}

	public function check_username_availablity_short()
	{
		$username = $this->input->post('username');
		if ($this->db->select('*')->from('user')->where('username', $username)->get()->num_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}

	//email validation
	public function check_email_availablity()
	{
		// $email = trim($this->input->post('email'));
		$email = $this->input->post('email');
		$email = strtolower($email);
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$q = $this->db->get();


		if ($q->num_rows() > 0)
			return false;
		else
			return true;
	}

	//insert the user data
	public function user_registration()
	{


		$landline = $this->input->post('landline1') . '-' . $this->input->post('landline2') . '-' . $this->input->post('landline3') . '-' . $this->input->post('landline4');
		$mobile = $this->input->post('mobile1') . '-' . $this->input->post('mobile2') . '-' . $this->input->post('mobile3') . '-' . $this->input->post('mobile4');

		$registration_data = array(
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('fname'),
			'last_name' => $this->input->post('lname'),
			'dob' => $this->input->post('dob'),
			'gender' => $this->input->post('gender'),
			'landline' => $landline,
			'mobile' => $mobile,
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'usertype' => $this->input->post('usertype')
		);

		// inserting values into user_details tables
		$insert1 = $this->db->insert('user', $registration_data);
	}

}

//class