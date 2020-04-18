<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('userM');
		$this->load->library('');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('view_login');
		} else {	
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$q = $this->userM->login($data);
			if ($q == 1) {
				$array = array(
					'id' = 1,
					'username' => $data['username']
				);
				$this->session->set_userdata($array);
				redirect('User');
			}else{
				$this->session->set_flashdata('error', '<p style="color : red;" class="login__link login__link--small">User Not Found !</p>');
				redirect('Login');
			}
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */