<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vietgram_m');
		$this->load->model('vietgram_m');
	}

	public function index()
	{
		$data['title'] = 'Feed | Vietgram';
		$data['feed'] = $this->vietgram_m->getAllFeed();
		$data['comments'] = $this->vietgram_m->getAllComments();

		$this->load->view('header',$data);
		$this->load->view('feed_v',$data);
		$this->load->view('footer');
	}
}
