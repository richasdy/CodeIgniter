<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_signup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->library('session');
		$this->load->model('m_user');
	}

	public function index() { 
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_signup');
		} else {
            $this->load->model('m_user');
            $data = [
                
				"username" => $this->input->post('username', true),
				"password" => $this->input->post('password', true),
				"email" => $this->input->post('email', true),
				"name" => $this->input->post('name', true),
				"photo_profile" => "default.jpg",
            ];
            $result = $this->m_user->signup($data);
            if ($result == 'fail') {
				$this->session->set_flashdata('flash','Sorry, your username is already used. Please use another username.');
				redirect('c_signup');
			} else {
                $this->session->set_flashdata('flash','Your signup is success.');
				redirect('c_login');
			}
        }
    }
}