<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('M_user');
    }

    public function index() {
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('caption', 'caption', 'required');
        $this->form_validation->set_rules('location', 'location', 'required');
        $data['profile'] = $this->M_user->getProfile();
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('V_upload', $data);
		} else {
            $this->load->model('M_photo');
            $data = [
                "name" => $this->input->post('name', true),
            ];
            $this->M_photo->upload($data);
    }
}