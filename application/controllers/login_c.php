<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vietgram_m');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('login_v');
	}
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            redirect('login_c');
        } else {
            $username = $this->input->post('username',true);
            $pass = $this->input->post('password',true);
            $data = $this->vietgram_m->cek_login($username,$password);
            if (count($data) == 1) {
                $this->session->set_userdata('user', $data[0]);
                redirect('feed_c');
            } else {
                redirect('login_c');
            }
        }
	}
}
?>