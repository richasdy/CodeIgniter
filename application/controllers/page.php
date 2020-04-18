<?php
defined('BASEPATH') or exit('No direct script access allowed');

class page extends CI_Controller
{

	/**
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('IdModel');
		$this->load->model('updateModel');
		$this->load->model('SearchModel');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('template/header', $data);
		$this->load->view('view_login');
		$this->load->model('IdModel');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$result = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->IdModel->cek_login("user", $result)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login",
			);
			$this->session->set_userdata($data_session);
			redirect("page/feed");
		} else {
			//$this->session->set_flashdata('success', 'User Login failed');
		}
	}
	public function feed()
	{
		$data['title'] = 'Feed';
		$this->load->view('template/header', $data);
		$this->load->view('view_feed');
		$this->load->view('template/footer', $data);
	}
	public function profile()
	{
		$data['title'] = 'Profile';
		$this->load->view('template/header', $data);
		$daata['profile'] = $this->IdModel->getUser()->result();
		$this->load->view('view_profile', $daata);
		$this->load->view('template/footer', $data);
	}

	function edit($id)
	{
		$head['title'] = 'Update Profile';
		$this->load->view('template/header', $head);
		$where = array('id' => $id);
		$data['profile'] = $this->updateModel->ambil_where($where, 'profile')->result();
		$this->load->view('view_update', $data);
	}

	function proses_edit()
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
		$this->updateModel->update($where, 'profile', $data);
		redirect('page/profile');
	}

	function search()
	{
		$data['title'] = 'Feed';
		$this->load->view('template/header', $data);
		$dataa['caption'] = $this->IdModel->getCap()->result();
		$this->load->view('view_search', $dataa);
		$this->load->view('template/footer', $data);

		if ($this->input->post('keyword')) {
			$data['caption'] = $this->SearchModel->cariCaption();
		}
	}

	function logout()
	{
		redirect(base_url('page'));
	}
}
