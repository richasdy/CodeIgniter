<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {
 function __construct(){
  parent::__construct();
  $this->load->model('AllModel');
  $this->load->library('form_validation');
 }
 
 public function index()
 {
    $this->load->view('templates/header');
    $data['explore'] = $this->AllModel->getExplore()->result();
	  $this->load->view('view_explore', $data);
	  $this->load->view('templates/footer');
 }
}
?>