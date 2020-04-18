<?php

class profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->model('follow');
        $this->load->model('post');
    }

    public function index() {
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user');
        if ($username) {
            $data = array( 
                'profile' => $this->user->getUser($username),
                'post' => $this->post->getPost($id),
                'followers' => $this->follow->getFollowers($id),
                'following' => $this->follow->getFollowing($id),
                'allPost' => $this->post->getUserPost($id)
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