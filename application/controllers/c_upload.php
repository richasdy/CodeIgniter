<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('m_user');
    }

    public function index() {
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('caption', 'caption', 'required');
        $this->form_validation->set_rules('location', 'location', 'required');
        $data['profile'] = $this->m_user->getProfile();
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_upload', $data);
		} else {
            $this->load->model('m_photo');
            $data = [
                "name" => $this->input->post('name', true),
            ];
            $this->m_photo->upload($data);
    }
}