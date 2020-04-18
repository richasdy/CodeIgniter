<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_vietgram');
    }

    public function index(){
        $this->load->view('v_header');
        $username = $this->session->userdata('username');
        $data['profile'] = $this->m_vietgram->get_profile($username)->row();
        $data['photo'] = $this->m_vietgram->get_userPhoto($username)->result();
        $data['jml_foto'] = $this->m_vietgram->get_userPhoto($username)->num_rows();
        $this->load->view('v_profile', $data);
        $this->load->view('v_footer');
    }
}

?>