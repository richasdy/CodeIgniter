<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library('form_validation');
        $this->load->model('m_vietgram');
    }

    public function index(){
        $this->load->view('v_header');
        $this->load->view('v_upload');
        $this->load->view('v_footer');
    }

    public function uploadPhoto(){
        //config accepted file
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('uploadImage')){
            $error['error_message'] = $this->upload->display_errors();
            
            $this->load->view('v_header');
            $this->load->view('v_upload', $error);
            $this->load->view('v_footer');
        } else{
            //insert data to db
            $data = [
                "username" => $this->session->userdata('username'),
                "url" => $this->upload->data('file_name'),
                "caption" => $this->input->post('caption', true),
                "jml_like" => 0
            ];
            $this->m_vietgram->uploadPhoto($data);
            redirect('/C_feed');
        }
    }
}
?>