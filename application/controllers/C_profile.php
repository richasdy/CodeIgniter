<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_profile');
        
	}

	public function index()
	{
        $user = $this->session->userdata('user');
        $data['profile'] = $this->M_profile->getProfile($user['username']);
		$this->load->view('profile',$data);
    }
    public function edit()
	{
		$user = $this->session->userdata('user');
        $data['profile'] = $this->M_profile->getProfile($user['username']);
        $username = $data['profile']['username'];
		$this->form_validation->set_rules('username', 'username','required');

        if ($this->form_validation->run() == false) {
			$this->load->view('edit-profile',$data);
			
        } else {
           	$update = array(
            	'name' => $this->input->post('name'),
            	'username' => $this->input->post('username'),
            	'website' => $this->input->post('website'),
            	'bio' => $this->input->post('bio'),
            	'email' => $this->input->post('email'),
            	'phone' => $this->input->post('phone'),
            	'gender' => $this->input->post('gender'),

            );
           	
            $this->M_profile->editProfile($username,$update);
            redirect('C_profile');
        }
    }
}