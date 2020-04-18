<?php

class explore extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('follow');
        $this->load->model('user');
    }

    public function index() {
        $id = $this->session->userdata('id');
        if ($id) {
            $data['users'] = $this->user->getSomeUser($id);
            $this->load->view('view_explore',$data);
        } else {
            redirect('/login');
        }
    }

    public function search() {
        $id = $this->session->userdata('id');
        $username = $this->input->get('search'); 
        $data['users'] = $this->user->searchUser($username, $id);
        $this->load->view('view_explore',$data);
    }

    public function add($id) {
        $data['id_user'] = $this->session->userdata('id');
        $data['id_user_follow'] = $id;
        $followed = $this->follow->checkFollowing($data); 
        if (!$followed) {
            $this->follow->addFollowing($data);
            redirect('/explore');
        }
        
    }
}