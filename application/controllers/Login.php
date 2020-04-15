<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index() {
		$this->load->view('V_login');
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);

		$check = $this->M_login->check_login("user", $where)->num_rows();
		if ($check > 0) {
			$data_session = array(
				'name' => $username,
				'status' => 'login'
			);
			
			$this->session->set_userdata($data_session);

			redirect(base_url('Profile'));
		} else {
			redirect(base_url('Login'));
		}
	}

}

?>
