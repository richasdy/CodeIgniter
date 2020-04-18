<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Nama: Haris Subekti
// NIM: 1301183323
// Kelas: IF-42-11

class M_User extends CI_Model {

  public function checkUser($username, $password) {
    return $this->db->get_where('user', [
      'username' => $username,
      'password' => $password
    ])->row_array();
  }
  
  public function getProfile($username) {
    return $this->db->get_where('profile', [
      'username' => $username
    ])->row_array();
  }

  public function editProfile($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('profile', $data);
  }

  public function editUser($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('user', $data);
  }

  // Upload Image -----------------------------
  public function uploadPhoto() {
    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 2048;
    $config['remove_spcae'] = TRUE;

    $this->load->library('upload', $config);
    if ($this->upload->do_upload('image')) {
      $result = [
        'result' => 'success',
        'file' => $this->upload->data(),
        'error' => '',
      ];
      return $result;
    } else {
      $result = [
        'result' => 'error',
        'file' => '',
        'error' => $this->upload->display_errors(),
      ];
      return $result;
    }
  }

  public function saveIntoDatabase($upload) {
    $data = [
      'url'     => $upload['file']['file_name'],
      'caption' => $this->input->post('caption'),
      'like'    => 225,
    ];
    $this->db->insert('photo', $data);
  }
  
}

?>