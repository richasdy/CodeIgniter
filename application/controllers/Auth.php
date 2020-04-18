<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index(){
		if($this->session->userdata('authenticated'))
			redirect('page/feed');

		$this->load->view('view_login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->UserModel->get($username);

		if (empty($user)){
			$this->session->set_flashdata('message', 'Wrong Username!');
			redirect('auth');
		}
		else{
			if($password == $user->password){
				$session = array(
					'authenticated'=>true,
					'username'=>$user->username
				);

				$this->session->set_userdata($session);
				redirect('page/feed');
			}
			else{
				$this->session->set_flashdata('message','Wrong Password!');
				redirect('auth');
			}
		}
	}

	public function view_profile(){
		$this->load->view('page/view_profile');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
}