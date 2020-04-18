<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 function __construct(){
  	parent::__construct();
  	$this->load->model('AllModel');
 }
 
 public function index()
 {
  	$this->load->view('view_login');
  	$this->load->view('templates/footer');
 }
 
 public function login()
 {
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');
    if($this->AllModel->login($data)) {
   	  $this->session->set_userdata('username', $this->input->post('username'));
   	  $this->session->set_userdata('password', $this->input->post('password'));
      redirect('/feed');
    } else {
      $data['error_message'] = "Username or Password ain't correct";
			$this->load->view('view_login', $data);
			$this->load->view('templates/footer');
    }
 }
}
?>