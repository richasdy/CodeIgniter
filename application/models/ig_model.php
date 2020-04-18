<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ig_model extends CI_Model {

  public function getProfile($username) {
    return $this->db->get_where('profile', [
      'username' => $username
    ])->row_array();
  }
  	public function login($username, $password) {
    return $this->db->get_where('user', [
      'username' => $username,
      'password' => $password
    ])->row_array();
  }

  public function editProfile($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('profile', $data);
  }

}

/* End of file ig_model.php */
/* Location: ./application/models/ig_model.php */
?>