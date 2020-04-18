<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('model_IG');
    $this->load->library('session');
 }
 
 public function index()
 {
  $this->load->view('login'); 
 }
 
 public function aksi_login(){
   $data['username'] = $this->input->post('username');
   $data['password'] = $this->input->post('password');
   
  if($this->model_IG->login($data)) {
   	$this->session->set_userdata('username', $this->input->post('username'));
   redirect('/feed');
  } 
  else {
   redirect('/login');
  }
 }
}
?>