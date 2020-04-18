<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('m_user');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        // $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('caption', 'caption', 'required');
        // $this->form_validation->set_rules('location', 'location', 'required');
        $data['profile'] = $this->m_user->getProfile();
        $username = $this->session->userdata('username');
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_upload', $data);
		} else {
            $this->load->model('m_photo');
            $result = $this->m_photo->upload($username);
            if ($result == 'fail') {
                $this->session->set_flashdata('flash','Sorry, something is wrong while uploading. Please double-check your image.');
                redirect('c_upload');
            } else {
                redirect('c_feed');
            }
        }
    }
}