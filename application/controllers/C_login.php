<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('session');
    }
 
    public function index() {
        $this->load->view('V_login'); 
    }
 
    public function aksi_login(){
        $data['username'] = $this->input->post('username');
   		$data['password'] = $this->input->post('password');
		 
		if($this->M_login->login($data)) {
   			$this->session->set_userdata('username', $this->input->post('username'));
    		$this->session->set_userdata('password', $this->input->post('password'));
  			redirect('C_feed');
		} 
		else {
            redirect('C_login', $data); 
        }
    }
}
