<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_profile');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile'] = $this->M_profile->getProfile($user);
        $data['photo'] = $this->M_profile->getPhoto($user);
        $this->load->view('V_Profile', $data);
    }

    public function logout() {
		$this->session->sess_destroy();
		redirect('C_login'); 
	}
}
?>