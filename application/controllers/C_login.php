<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('M_user');
    }

    public function index() { 
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->session->has_userdata('username')) {
			redirect('C_feed');
		}
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('V_login');
		} else {
			$this->load->model('M_user');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->M_user->login($username, $password);
			if ($result == 'fail') {
				$this->session->set_flashdata('flash','Sorry, your username or password was incorrect. Please double-check your password.');
				redirect('C_login');
			} else {
				redirect('C_feed');
			}
		}
		
	}

	public function logout() {
		$this->session->unset_userdata('username');
		redirect('C_login');
	}

}




?>