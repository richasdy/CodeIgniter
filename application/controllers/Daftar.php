<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('model_IG');
 }
 
 public function index()
 {
  $this->load->view('daftar'); 
 }
 
 public function aksi_daftar(){
   $data1['username'] = $this->input->post('username');
   $data1['password'] = $this->input->post('password');
   $data1['email'] = $this->input->post('email');

   $data2['name'] = $this->input->post('name');
   $data2['username'] = $this->input->post('username');
   $data2['website'] = $this->input->post('website');
   $data2['bio'] = $this->input->post('bio');
   $data2['email'] = $this->input->post('email');
   $data2['nohp'] = $this->input->post('nohp');
   $data2['gender'] = $this->input->post('gender');

   $already_exist = $this->model_IG->check_username($data1['username']);  
   $cekuser=  false;
   if (!$already_exist) { 
    $cekuser = true;
   }
  if($cekuser) {
    $this->model_IG->insert_user($data1,$data2);
    redirect('/login?register-success');
  } else {
    $data['error_message'] = 'Username already exist';
    $this->load->view('daftar', $data);
  }
 }
}
?>