<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('userM');
	}
	public function index()
	{
		$data['feed'] = $this->userM->getPost();
		$this->load->view('feed',$data);
	}
	public function profile()
	{
		$data['user'] = $this->userM->getUser(1)->row();
		$this->load->view('profile', $data);
	}
	public function editProfile()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$data['user'] = $this->userM->getUser(1)->row();
		$this->load->view('edit-profile', $data);
	}
	public function editProfileAction()
	{
		$user['name'] = $this->input->post('full-name');
		$user['username'] = $this->input->post('username');
		$user['website'] = $this->input->post('website');
		$user['bio'] = $this->input->post('bio');
		$user['email'] = $this->input->post('email');
		$user['phone_number'] = $this->input->post('phone');
		$user['gender'] = $this->input->post('gender');
		$this->userM->updateUser(1,$user);
		$this->session->set_flashdata('success', 'Profile Updated !');
		redirect('user/editProfile');
	}
	public function addPhoto()
	{
		$this->load->view('add-photo');
	}
	public function addPhotoAction()
	{
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$poto['caption'] = $this->input->post('caption');
			$poto['url'] = 'uploads/'.$data['upload_data']['file_name'];
			$this->userM->uploadPhoto($poto);
			$this->session->set_flashdata('success', 'upload success !');
			redirect('user/addPhoto');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */