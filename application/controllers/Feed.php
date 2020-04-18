<?php

class Feed extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Post');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['allPost'] = $this->Post->getAllPost();
            $this->load->view('view_feed',$data);
        } else {
            redirect('/login');
        }
    }
}