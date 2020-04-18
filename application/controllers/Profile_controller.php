<?php

class Profile_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Follow_model');
        $this->load->model('Post_model');
    }

    public function index() {
        $id_user = $this->session->userdata('id');
        $username = $this->session->userdata('user');
        if ($username) {
            $data = array( 
                'profile' => $this->User_model->getUser($username),
                'post' => $this->Post_model->getPost($id_user),
                'followers' => $this->Follow_model->getFollowers($id_user),
                'following' => $this->Follow_model->getFollowing($id_user),
                'allPost' => $this->Post_model->getUserPost($id_user)
            );
            $this->load->view('profile-view',$data);
        } else {
            redirect('/login_controller');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/login_controller');
    }

}