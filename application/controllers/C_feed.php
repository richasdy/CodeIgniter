<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_feed extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // echo "masuk feed";
        $data['title'] = "feed";
        $user = $this->session->userdata('username');
        // echo $user[]
        if ($user) {
            // $data['feed'] = $this->db_Model->getprofile($user);
            $data['data_feed'] = $this->db_Model->getuserfeed($user);
            // echo $data['name'];
            // echo $data['username'];
            // echo $data['bio'];
            // echo $data['profile_photos']; ITS WORK!
            $this->load->view('templates/headermenu', $data);
            $this->load->view('menu/feed', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('/C_login');
        }
    }

    public function searchcapt()
    {
        // echo "masuk search method";
        $data['title'] = "feed";
        $user = $this->session->userdata('username');
        $search = $this->input->post('search');
        // echo $user[]
        if ($user) {
            // $data['feed'] = $this->db_Model->getprofile($user);
            $data['data_feed'] = $this->db_Model->getspecificfeed($user, $search);
            // echo $data['name'];
            // echo $data['username'];
            // echo $data['bio'];
            // echo $data['profile_photos']; ITS WORK!
            $this->load->view('templates/headermenu', $data);
            $this->load->view('menu/feed', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('/C_login');
        }
    }
    public function uploadimg()
    {
        echo "masuk upload";
    }
    // public function gotoprofile()
    // {
    //     echo "masuk profile";
    // }
}
