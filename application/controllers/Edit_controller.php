<?php

class Edit_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $username_user = $this->session->userdata('user');
        if ($username_user) {
            $data['profile'] = $this->User_model->getUser($username_user);
            $this->load->view('editprofile-view',$data);
        } else {
            redirect('/login_controller');
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
        $this->User_model->editUser($id,$data);
        redirect('/profile_controller');
    }
}