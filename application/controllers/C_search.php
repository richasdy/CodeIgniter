<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_search extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_vietgram');
    }

    public function searchCaption(){
        $this->load->view('v_header');
        //Mengambil profile untuk session
        $caption = $this->input->get('search');
        $data['photo'] = $this->m_vietgram->searchCaption($caption)->result();
        $this->load->view('v_searchCaption', $data);
        $this->load->view('v_footer');
    }
}
?>