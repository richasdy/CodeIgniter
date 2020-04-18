<?php

class Feed extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Post_model');
    }

    public function index()
    {
        $data['title'] = 'Feed | Vietgram';
        $username = $this->session->userdata('user');
        if ($username) {
            $data['allPost'] = $this->Post->getAllPost();
            $this->load->view('view_feed', $data);
        } else {
            redirect('/login');
        }
    }
}
