<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_feed extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('m_photo');
    }
    
    public function index() {
        $data['post'] = $this->m_photo->getAll();
        if ($this->input->post('keyword')) {
			$data['post'] = $this->m_photo->cariPost();
		}
        $this->load->view('v_feed', $data);

    }

    public function search() {
        $this->load->model('m_photo');
        $search = $this->input->get('search');
        $data['post'] = $this->m_photo->cariPost($search);
        $this->load->view('v_feed', $data);
    }
}