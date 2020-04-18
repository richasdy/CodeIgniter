<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_feed extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('M_photo');
    }
    
    public function index() {
        $data['post'] = $this->M_photo->getAll();
        if ($this->input->post('keyword')) {
			$data['post'] = $this->M_photo->cariPost();
		}
        $this->load->view('V_feed', $data);

    }

    public function search() {
        $this->load->model('M_photo');
        $search = $this->input->get('search');
        $data['post'] = $this->M_photo->cariPost($search);
        $this->load->view('V_feed', $data);
    }
}