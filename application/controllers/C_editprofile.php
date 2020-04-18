<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_editprofile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_editprofile');
        $this->load->model('M_profile');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
 
    public function index() {
        $username = $this->session->userdata('username');
        $data['profile'] = $this->M_profile->getProfile($username);
        $this->load->view('V_editprofile', $data); 
    }
 
    public function edit() {
        $username = $this->session->userdata('username');
		$data['profile'] = $this->M_profile->getProfile($username);

        //$this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        // $this->form_validation->set_rules('website', 'website', 'required');
        // $this->form_validation->set_rules('bio', 'bio', 'required');
        // $this->form_validation->set_rules('email', 'email', 'required');
        // $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
        // $this->form_validation->set_rules('gender', 'gender', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('V_editprofile', $data);
		}
		else { 
			$this->M_editprofile->editprofile($username,$data);
			redirect('C_profile');
		}
    }
}
?>