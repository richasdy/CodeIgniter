<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('M_user');
    }

    public function index() {
        $this->form_validation->set_rules('name', 'username', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'password', 'required');
        $data['profile'] = $this->M_user->getProfile();
        
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('V_edit', $data);
		} else {
            $this->load->model('M_user');
            $data = [
                "name" => $this->input->post('name', true),
                "username" => $this->input->post('username', true),
                "website" => $this->input->post('web', true),
                "bio" => $this->input->post('bio', true),
                "email" => $this->input->post('email', true),
                "phone" => $this->input->post('phone', true),
                "gender" => $this->input->post('gender', true),
            ];
            $result = $this->M_user->edit($data);
            
			redirect('C_profile');
			
        }
        
        
    }

}