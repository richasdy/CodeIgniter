<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_feed extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Model_instagram');
		$this->load->library('session');
	}

	public function index() {
		if($this->session->userdata('username')) {
			$data = $this->Model_instagram->get_profile($this->session->userdata('username'));
			$this->load->view('View_feed',$data);
		} else {
			redirect('/Controller_login');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('/Controller_login'); 
	}
}
?>