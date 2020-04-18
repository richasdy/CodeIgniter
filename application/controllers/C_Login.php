<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            redirect('C_Login');
        } else {
            $username = $this->input->post('username',true);
            $pass = $this->input->post('password',true);
            $data = $this->M_Login->login($username,$pass);
            if (count($data) == 1) {
                $this->session->set_userdata('user', $data[0]);
                redirect('C_Feed');
            } else {
                redirect('C_Login'); 
            }
        }
	}


}
