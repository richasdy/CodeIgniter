<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "login";
        $this->load->view('templates/header', $data);
        $this->load->view('menu/login');
        $this->load->view('templates/footer');
    }

    public function verify()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');

        // echo $data['username'] . $data['password'];
        if (!$this->db_Model->verifylogin($data)) {
            $data['title'] = "login";
            $data['error_message'] = "Username or password might be wrong";
            $this->load->view('templates/header', $data);
            $this->load->view('menu/login', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_userdata('username', $data['username']);
            // $this->session->set_userdata('password', $data['password']);

            $data['title'] = "feed";
            $this->load->view('templates/header', $data);
            redirect('/C_feed');
            $this->load->view('templates/footer');
        }
    }
}
