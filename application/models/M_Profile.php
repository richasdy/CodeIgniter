<?php

class M_Profile extends CI_model
{

	public function getProfile($username)
	{

		$query = $this->db->query("SELECT * FROM profile WHERE username = '".$username."'");
		return $query->row_array();
	}

	public function editProfile($username,$data)
	{
		$query = $this->db->where('username',$username);
		$this->db->update('profile',$data);
    }
}


