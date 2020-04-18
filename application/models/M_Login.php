<?php

class M_Login extends CI_model
{

	public function login($username,$pass)
	{
		$query = $this->db->query("SELECT * FROM user WHERE username = '".$username."' AND password = '".$pass."'");
		return $query->result_array();
	}

}
