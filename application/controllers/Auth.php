<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Nama: Haris Subekti
// NIM: 1301183323
// Kelas: IF-42-11

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

		$user = $this->M_User->checkUser($username, $password);
		
		// if user avail
		if ($user) { 
			$profile = $this->M_User->getProfile($user['username']);

			$this->session->set_userdata($profile);
			redirect('User');
		} else {
			redirect('Auth');
		}
	}

	public function do_logout() {
		$this->session->unset_userdata('username');
		redirect('Auth');
	}
	
}

?>
