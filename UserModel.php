<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class UserModel extends CI_Model {

	public function get ($username){
		$this->db->where('username', $username);
		$result = $this->db->get('user')->row();

		return $result;
	}
}