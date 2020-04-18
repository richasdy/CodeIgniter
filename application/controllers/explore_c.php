<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vietgram_m');
	}

	public function index()
	{
		$data['title'] = 'Explore | Vietgram';
		$user = $this->session->userdata('user');
		$data['friends'] = $this->vietgram_m->getExplore($user['username']);
		$this->load->view('header',$data);
		$this->load->view('explore_v',$data);
		$this->load->view('footer');
	}
}