<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('model_user');
	}
	
	public function index()
	{
		$this->load->view('view_login');
	}

	public function login()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$result = $this->model_user->login($data);
		if ($result) {
				$user = $this->model_user->get_UserbyUsername($data['username']);
				$this->session->set_userdata($user);
				$this->load->view('view_feed');
		} else {
				$this->load->view('view_login');
		}
	}
	public function seefeed()
	{
		$this->load->view('view_feed');
	}

	public function updateProfile()
	{
		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['website'] = $this->input->post('website');
		$data['bio'] = $this->input->post('bio');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['gender'] = $this->input->post('gender');
		$result = $this->model_user->update_User($data['username'],$data);
		if($result){
			$user = $this->model_user->get_UserbyUsername($data['username']);
			$this->session->set_userdata($user);
			$this->load->view('view_profile');
		}
		else{
			$this->load->view('view_edit-profile');
		}

	}	
	public function editProfile()
	{
		$this->load->view('view_edit-profile');
	}
	public function seeProfile()
	{
		$this->load->view('view_profile');
	}
	public function seeExplore()
	{
		$this->load->view('view_explore');
	}

}
