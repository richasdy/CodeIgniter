<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('m_user');
	}

	public function index() { 
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->session->has_userdata('username')) {
			redirect('c_feed');
		}
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		} else {
			$this->load->model('m_user');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->m_user->login($username, $password);
			if ($result == 'fail') {
				$this->session->set_flashdata('flash','Sorry, your username or password was incorrect. Please double-check your password.');
				redirect('c_login');
			} else {
				redirect('c_feed');
			}
		}
		
	}

	public function logout() {
		$this->session->unset_userdata('username');
		redirect('c_login');
	}
	
    
}
