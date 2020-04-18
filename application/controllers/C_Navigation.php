<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Navigation extends CI_Controller {


    public function __construct() { 
        parent::__construct();
        $this->load->model("M_User");
    }

    public function index() { 
        $this->load->view("explore");
    
    }

    

}
