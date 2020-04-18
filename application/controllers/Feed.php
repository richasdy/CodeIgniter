<?php

class feed extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->model('post');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['allPost'] = $this->post->getAllPost();
            $this->load->view('view_feed',$data);
        } else {
            redirect('/login');
        }
    }
}