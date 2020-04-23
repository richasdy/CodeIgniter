<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_profile');
        $this->load->model('m_photo');
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->m_profile->getProfile($user['username']);
        $data['photo'] = $this->m_photo->getPhoto($user['username']);

        $this->load->view('templates/header', $data);
        $this->load->view('view_profile', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $user = $this->session->userdata('user');
        $data['title'] = 'Edit Profile';
        $data['profile'] = $this->m_profile->getProfile($user['username']);
        $uname = $data['profile']['username'];
        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('view_edit', $data);
            $this->load->view('templates/footer');
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

            $this->m_profile->editProfile($uname, $update);
            redirect('profile');
        }
    }
}
