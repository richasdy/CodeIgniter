<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vietgram_m');
		$this->load->model('vietgram_m');
	}

	public function index()
	{
        $data['title'] = 'Profile | Vietgram';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->vietgram_m->getProfile($user['username']);
        $data['photo'] = $this->vietgram_m->getPhoto($user['username']);
       
        $this->load->view('header',$data);
		$this->load->view('profile_v',$data);
		$this->load->view('footer');
	}
	public function edit()
	{
		$user = $this->session->userdata('user');
		$data['title'] = 'Edit Profile | Vietgram';
		$data['profile'] = $this->vietgram_m->getProfile($user['username']);
		$username = $data['profile']['username'];
		$this->form_validation->set_rules('username', 'username','required');

        if ($this->form_validation->run() == false) {
            $this->load->view('header',$data);
			$this->load->view('edit-profile_v',$data);
			$this->load->view('footer');
        } else {
           	$update = array(
            	'name' => $this->input->post('name'),
            	'username' => $this->input->post('username'),
            	'website' => $this->input->post('website'),
            	'bio' => $this->input->post('bio'),
            	'email' => $this->input->post('email'),
            	'phone' => $this->input->post('phone'),
            	'gender' => $this->input->post('gender'),
            	'ava' => $data['profile']['ava'],
            	'follower' => $data['profile']['follower'],
            	'following' => $data['profile']['following']
            );
            $this->vietgram_m->editProfile($username,$update);
            redirect('profile');
        }
    }
}