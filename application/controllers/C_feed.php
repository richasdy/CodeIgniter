<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_feed extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_feed');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('username')){
			$data['feed'] = $this->M_feed->getFeed();
			$this->load->view('V_feed', $data);
		}else{
			redirect('V_login');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('V_login'); 
	}
}
?>