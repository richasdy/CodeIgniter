<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserM');
	}
	public function index()
	{
		$this->load->view('feed');
	}
	public function profile()
	{
		$this->load->view('profile');
	}
	public function editProfile()
	{
		$this->form_validation->set_rules('full-name', 'fieldlabel', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('edit-profile');
		} else {
			# code...
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */