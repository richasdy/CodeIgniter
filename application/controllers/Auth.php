<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index() {
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
      $this->load->view('V_login');
    } else {
      $this->_do_login();
    }
	}

	private function _do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = [
			'username' => $username,
			'password' => $password
		];

		$user = $this->M_User->checkUser($where);
		
		// if user avail
		if ($user) {
			$profile = $this->M_User->getProfile();
			
			$this->session->set_userdata($profile);
			redirect('User');
		}
	}


	
}

?>
