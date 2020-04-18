<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('M_user');
    }
    
    public function index() {
        $data['profile'] = $this->M_user->getProfile();
        $data['posting'] = $this->M_user->getPost();
        $this->M_user->countPost();
        $this->load->view('V_profile', $data);
    }

}