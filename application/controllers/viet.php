<?php
defined('BASEPATH') or exit('No direct script access allowed');

class viet extends CI_Controller
{

	/**
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_main');
		$this->load->model('M_edit');
		// $this->load->model('SearchModel');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('template/header', $data);
		$this->load->view('login');
		$this->load->model('M_main');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$result = array(
			'username' => $username,
			'password' => $password
		);
		$i = $this->M_main->cek_login("user", $result)->num_rows();
		if ($i > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login",
			);
			$this->session->set_userdata($data_session);
			redirect("viet/feed");
		} else {
			//$this->session->set_flashdata('success', 'User Login failed');
		}
	}
	public function feed()
	{
		$data['title'] = 'Feed';
		$this->load->view('template/header', $data);
		$this->load->view('feed');
		$this->load->view('template/footer', $data);
	}
	public function profile()
	{
		$data['title'] = 'Profile';
		$this->load->view('template/header', $data);
		$dt['profile'] = $this->M_main->getUser()->result();
		$this->load->view('profile', $dt);
		$this->load->view('template/footer', $data);
	}

	function edit($id)
	{
		$head['title'] = 'Edit Profile';
		$this->load->view('template/header', $head);
		$where = array('id' => $id);
		$data['profile'] = $this->M_edit->gett($where, 'profile')->result();
		$this->load->view('edit-profile', $data);
	}

	function to_edit()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$website = $this->input->post('website');
		$bio = $this->input->post('bio');
		$email = $this->input->post('email');
		$phonenumber = $this->input->post('phonenumber');
		$gender = $this->input->post('gender');

		$data = array(
			'name' => $name,
			'username' => $username,
			'website' => $website,
			'bio' => $bio,
			'email' => $email,
			'phonenumber' => $phonenumber,
			'gender' => $gender
		);
		$where = array('id' => $id);
		$this->M_edit->update($where, 'profile', $data);
		redirect('viet/profile');
	}

	// function search()
	// {
	// 	$data['title'] = 'Feed';
	// 	$this->load->view('template/header', $data);
	// 	$daata['caption'] = $this->M_main->getCapt()->result();
	// 	$this->load->view('view_search', $daata);
	// 	$this->load->view('template/footer', $data);

	// 	if ($this->input->post('keyword')) {
	// 		$data['caption'] = $this->SearchModel->cariCaption();
	// 	}
	// }

	function logout()
	{
		redirect(base_url('viet'));
	}
}
