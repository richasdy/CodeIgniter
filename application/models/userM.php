<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model {
	public function login($data)
	{
		$q = $this->db->query("SELECT * FROM `user` WHERE `username`='".$data['username']."' AND `password`='".md5($data['password'])."'");
		return $q->num_rows();
	}
	public function getUser($id)
	{
		$q = $this->db->query("SELECT * FROM `profile` WHERE `id_profile`='$id'");
		return $q;
	}
	public function updateUser($id, $data)
	{
		$this->db->where('id_profile', $id);
		$this->db->update('profile', $data);

	}
}

/* End of file userM.php */
/* Location: ./application/models/userM.php */