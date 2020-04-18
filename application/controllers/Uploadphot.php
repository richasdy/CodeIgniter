<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploadphot extends CI_Controller {

 function __construct(){
    parent::__construct();
    $this->load->model('viet_gram_model');
    $this->load->library('session');
 }
 
 public function index()
 {
  $data = $this->viet_gram_model->get_profile($this->session->userdata('username'));
  $this->load->view('Uploadphot', $data); 
 }
}
?>