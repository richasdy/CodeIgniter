<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Page extends MY_Controller {

	public function feed(){
		$this->load->view('feed');
	}

	public function view_profile(){
		$this->load->view('view_profile');
	}
}