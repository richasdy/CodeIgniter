<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class LoginPage extends CI_Controller{
        
        public function index(){
            $this->load->view('index_login');
        }
    }
?>