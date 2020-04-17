<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

  function checkUser($where) {
    return $this->db->get_where('user', $where)->row_array();
  }
  
  function getProfile() {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->join('photo', 'photo.username = profile.username');
    return $this->db->get()->row_array();
  }

  function editProfile($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('profile', $data);
  }

  function editUser($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('user', $data);
  }
}

?>