<?php

class controller_feed extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('model_post');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['allPost'] = $this->model_post->getAllPost();
            $this->load->view('view_feed',$data);
        } else {
            redirect('/login');
        }
    }
}
