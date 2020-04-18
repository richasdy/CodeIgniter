<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('m_user');
    }
    
    public function index() {
        $data['profile'] = $this->m_user->getProfile();
        $data['posting'] = $this->m_user->getPost();
        $this->m_user->countPost();
        $this->load->view('v_profile', $data);
    }

}