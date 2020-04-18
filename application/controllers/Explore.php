<?php

class Explore extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Follow');
        $this->load->model('User');
    }

    public function index() {
        $id = $this->session->userdata('id');
        if ($id) {
            $data['users'] = $this->User->getSomeUser($id);
            $this->load->view('view_explore',$data);
        } else {
            redirect('/login');
        }
    }

    public function search() {
        $id = $this->session->userdata('id');
        $username = $this->input->get('search'); 
        $data['users'] = $this->User->searchUser($username, $id);
        $this->load->view('view_explore',$data);
    }

    public function add($id) {
        $data['id_user'] = $this->session->userdata('id');
        $data['id_user_follow'] = $id;
        $followed = $this->Follow->checkFollowing($data); 
        if (!$followed) {
            $this->Follow->addFollowing($data);
            redirect('/explore');
        }
        
    }
}