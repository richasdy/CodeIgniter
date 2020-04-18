<?php

class controller_profile  extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('model_follow');
        $this->load->model('model_post');
    }

    public function index() {
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user');
        if ($username) {
            $data = array( 
                'profile' => $this->model_user->getUser($username),
                'post' => $this->model_post->getPost($id),
                'followers' => $this->model_follow->getFollowers($id),
                'following' => $this->model_follow->getFollowing($id),
                'allPost' => $this->model_post->getUserPost($id)
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