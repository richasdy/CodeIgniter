<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_explore extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_explore');
		$this->load->library('session');
	}

	public function index()
	{
		$user = $this->session->userdata('username');
		$data['explore'] = $this->M_explore->getExplore($user);
		$this->load->view('V_explore',$data);
	}
}
?>