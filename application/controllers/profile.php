<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('userM');
    $this->load->library('session');
 }

 public function index()
 {
  $data = $this->userM->get_profile($this->session->userdata('username'));
  $this->load->view('Profile', $data); 
 }
}
?> 