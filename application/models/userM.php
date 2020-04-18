<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model {
	public function login($data)
	{
		// $q = $this->db->where('username', $data['username']);
		// $q = $this->db->where('password', $data['password']);
		$q = $this->db->query("SELECT * FROM `user` WHERE `username`='".$data['username']."' AND `password`='".md5($data['password'])."'");
		return $q->num_rows();
	}
}

/* End of file userM.php */
/* Location: ./application/models/userM.php */