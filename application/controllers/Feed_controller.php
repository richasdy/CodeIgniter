<?php

class Feed_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Post_model');
    }

    public function index() {
        $username_user = $this->session->userdata('user');
        if ($username_user) {
            $data['allPost'] = $this->Post_model->getAllPost();
            $this->load->view('feed-view',$data);
        } else {
            redirect('/login_controller');
        }
    }
}