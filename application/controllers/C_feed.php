<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_feed extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_vietgram');
    }

    public function index(){
        $this->load->view('v_header');
        $data['photo'] = $this->m_vietgram->get_allPhotos()->result();
        $this->load->view('v_feed', $data);
        $this->load->view('v_footer');
    }
}

?>