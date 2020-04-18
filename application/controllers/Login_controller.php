<?php

class Login_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('login-view');
    }

    public function login(){
        $data_user['username'] = $this->input->post('username');
        $data_user['password'] = $this->input->post('password');
        $result = $this->User_model->login($data_user);
        if ($result) {
            $this->session->set_userdata('id',$result->id_user);
            $this->session->set_userdata('user',$data_user['username']);
            redirect('/feed_controller');
        } else {
            $error = array('error_message' => "Username or Password ain't correct");
            $this->load->view('login-view', $error);
        }
    }
}