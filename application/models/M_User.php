<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

  function checkUser($username, $password) {
    return $this->db->get_where('user', [
      'username' => $username,
      'password' => $password
    ])->row_array();
  }
  
  function getProfile($username) {
    return $this->db->get_where('profile', [
      'username' => $username
    ])->row_array();
  }

  function editProfile($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('profile', $data);
  }

  function editUser($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('user', $data);
  }

  // Upload Image -----------------------------
  private $_id;
  private $_url;

  public function setID($id) {
    $this->_id = $id;
  }

  public function setURL($url) {
    $this->_url = $url;
  }

  public function getPhoto() {
    $this->db->select(array('p.id', 'p.url'));
    $this->db->from('photo p');
    $this->db->where('p.id', $this->_id);
    return $this->db->get()->row_array();
  }
  
  public function createPhoto() {
    $data = array(
      'url' => $this->_url,
    );
    $this->db->insert('photo', $data);
    return $this->db->insert_id();
  }
}

?>