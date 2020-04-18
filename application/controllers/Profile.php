<?php

class Profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Follow');
        $this->load->model('Post');
    }

    public function index() {
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user');
        if ($username) {
            $data = array( 
                'profile' => $this->User->getUser($username),
                'post' => $this->Post->getPost($id),
                'followers' => $this->Follow->getFollowers($id),
                'following' => $this->Follow->getFollowing($id),
                'allPost' => $this->Post->getUserPost($id)
            );
            $this->load->view('view_profile',$data);
        } else {
            redirect('/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/login');
    }

}