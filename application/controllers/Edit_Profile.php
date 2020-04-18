<?php

class Edit_Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['profile'] = $this->User->getUser($username);
            $this->load->view('view_edit_profile',$data);
        } else {
            redirect('/login');
        }
    }

    public function edit() {
        $id = $this->session->userdata('id');
        $data['username'] = $this->input->post('username');
        $data['name'] = $this->input->post('name');
        $data['website'] = $this->input->post('website');
        $data['bio'] = $this->input->post('bio');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phonenumber');
        $data['gender'] = $this->input->post('gender');
        $this->User->editUser($id,$data);
        redirect('/profile');
    }
}