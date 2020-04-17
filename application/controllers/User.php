<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('Auth');
    }

    $this->load->model('M_User');
  }

  public function index() {
    $this->load->view('V_profile');
  }

  public function load_editProfile() {
    $this->load->view('V_edit-profile');
  }

  public function load_uploadPhoto() {
    $this->load->view('V_upload-photo');
  }

  public function do_editProfile() {
    $username = $this->session->userdata('username');
    
    $dataProfile = [
      'name'        => $this->input->post('name'),
      'username'    => $this->input->post('username'),
      'website'     => $this->input->post('website'),
      'bio'         => $this->input->post('bio'),
      'email'       => $this->input->post('email'),
      'phonenumber' => $this->input->post('phonenumber'),
      'gender'      => $this->input->post('gender')
    ];

    $dataUser = [
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email')
    ];

    $this->M_User->editProfile($dataProfile, $username);
    $this->M_User->editUser($dataUser, $username);
    $this->session->set_userdata($dataProfile);
    redirect('User');
  }

  public function do_uploadPhoto() {
    
  }
  
}

?>