<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Login extends CI_Controller {


    public function __construct() { 
        parent::__construct();
        $this->load->model("M_User");
    }

    public function index() { 
        $this->load->view("index");
    
    }

    public function login() { 

        $username = $this->input->post("username");
        $password = $this->input->post("password"); 

        $check = $this->M_User->login($username, $password);
        if ($check) {
            $this->session->set_userdata("username", $username); 
            redirect('C_Feed');
        }else { 

            $message = "username or password is wrong";
            $this->session->set_flashdata('message', $message);
            $this->load->view("index");
        }


    }

}
