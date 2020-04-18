<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_profile extends CI_Controller {

	function __construct(){
   		parent::__construct();
    	$this->load->model('Model_instagram');
    	$this->load->library('session');
 	}
 
 	public function index() {
  		$data = $this->Model_instagram->get_profile($this->session->userdata('username'));
  		$this->load->view('View_profile', $data); 
 	}
}
?>