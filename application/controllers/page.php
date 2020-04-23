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
		$this->load->model('m_id');
		$this->load->model('m_update');
		$this->load->model('m_search');
		$this->load->model('m_upload');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('template/header', $data);
		$this->load->view('view_login');
		$this->load->model('m_id');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$result = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_id->cek_login("user", $result)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login",
			);
			$this->session->set_userdata($data_session);
			redirect("page/feed");
		} else {
			//Nothing
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
		$data['profile'] = $this->m_id->getUser()->result();
		$data['photo'] = $this->m_id->getPhoto()->result();
		$this->load->view('view_profile', $data);
		$this->load->view('template/footer', $data);
	}

	function edit($username)
	{
		$head['title'] = 'Update Profile';
		$this->load->view('template/header', $head);
		$where = array('username' => $username);
		$data['profile'] = $this->m_update->ambil_where($where, 'profile')->result();
		$this->load->view('view_update', $data);
	}

	function proses_edit()
	{
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
		$where = array('username' => $username);
		$this->m_update->update($where, 'profile', $data);
		redirect('page/profile');
	}

	function search()
	{
		$data['title'] = 'Feed';
		$this->load->view('template/header', $data);
		$daata[''] = $this->m_id->getCap()->result();
		$this->load->view('view_search', $daata);
		$this->load->view('template/footer', $data);

		if ($this->input->post('keyword')) {
			//Nothing
		}
	}

	function explore()
	{
		$data['title'] = 'Explore';
		$this->load->view('template/header', $data);
		$this->load->view('view_explore', $data);
		$this->load->view('template/footer', $data);
	}

	function logout()
	{
		redirect(base_url('page'));
	}

	function test()
	{
		$this->load->view('template/header');
		$this->load->view('test');
	}

	function upload()
	{
		$data['title'] = "Upload Photo";
		$data['photo'] = $this->m_upload->view();
		$this->load->view('template/header', $data);
		$this->load->view('view_home', $data);
		$this->load->view('template/footer', $data);
	}

	public function tambah()
	{
		$data['photo'] = $this->m_upload->view();
		$this->load->view('template/header', $data);
		$data = array();
		if ($this->input->post('submit')) {
			$upload = $this->m_upload->upload();

			if ($upload['result'] == "success") {
				$this->m_upload->save($upload);

				redirect('page/upload');
			} else {
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('view_upload', $data);
	}
}
