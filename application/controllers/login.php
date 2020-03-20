<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function demo()
	{
		$this->load->view('view_login');
	}
}