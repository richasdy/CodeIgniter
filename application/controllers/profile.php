?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
 function __construct(){
  parent::__construct();
  $this->load->library('form_validation');
	$this->load->model('AllModel');
 }
 
 public function index()
 {
		$this->load->view('templates/header');
		$data['profile'] = $this->AllModel->getProfile();
		$data['photo'] = $this->AllModel->getPhoto();
		$this->load->view('view_profile', $data);
		$this->load->view('templates/footer');
 }
 
 function edit()
	{
		$this->load->view('templates/header');
		$where = array('username' => $this->session->username);
		$data['profile'] = $this->AllModel->getWhere($where, 'profile')->result();
		$this->load->view('view_update', $data);
		$this->load->view('templates/footer');
	}

	function proses_edit()
	{
		$name = $this->input->post('name');
		$username = $this->session->username;
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
			'phone_number' => $phonenumber,
			'gender' => $gender
		);
		$where = array('username' => $username);
		$this->AllModel->update($where, 'profile', $data);
		redirect('/profile');
	}
}
?>