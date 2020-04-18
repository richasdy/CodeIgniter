<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profile extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('IG_model');
    $this->load->library('session');
 }
 
 public function index()
 {
  $this->load->view('edit_profile'); 
 }
 public function editprofile()
 {
     $data = [
         "name" => $this->input->post('name', true),
         "website" => $this->input->post('website', true),
         "bio" => $this->input->post('bio', true),
         "email" => $this->input->post('email', true),
         "no_hp" => $this->input->post('no_hp', true),
         "gender" => $this->input->post('gender', true),
     ];
     $this->IG_model->edit_profile($_SESSION['username'], $data);
     redirect('/profile','refresh');
 }
}
?>