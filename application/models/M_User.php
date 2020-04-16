<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

  function checkUser($where) {
    return $this->db->get_where('user', $where)->row_array();
  }
  
  function getProfile() {
    return $this->db->get('profile')->row_array();
  }
  
}

?>