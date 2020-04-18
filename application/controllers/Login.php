<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_user');
    }

    public function index() {
        $this->load->view('view_login');
    }

    public function login(){
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $result = $this->model_user->login($data);
        if ($result) {
            $this->session->set_userdata('id',$result->id_user);
            $this->session->set_userdata('user',$data['username']);
            redirect('/controller_feed');
        } else {
            $error = array('error_message' => "Username or Password ain't correct");
            $this->load->view('view_login', $error);
        }
    }
}