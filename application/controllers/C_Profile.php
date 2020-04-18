<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Profile extends CI_Controller {

    
    public function __construct() { 
        parent::__construct();
        $this->load->model("M_User");
        $this->load->model("M_Photos");
    }

    public function index() { 
        $data['uploads'] = $this->M_User->userUploads($this->session->userdata('username'));
        $data['profile'] = $this->M_User->loadProfile($this->session->userdata('username'));
        $this->load->view("profile", $data);
    
    }


  


}
