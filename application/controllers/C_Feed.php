<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Feed extends CI_Controller {

    
    public function __construct() { 
        parent::__construct();
        $this->load->model("M_User");
        $this->load->model("M_Photos");
    }

    public function index() { 
        $data['photos'] = $this->M_Photos->getFeedData();
        $this->load->view("feed", $data);
    
    }


    public function upload() { 
        $config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('image')) {

            $data = array(
                'username' => $this->session->userdata('username'),
                'url' => './assets/images/'.$this->upload->data('file_name'),
                'caption'  => $this->input->post('caption'),
                'like'  => 0
            );

            $this->M_Photos->upload($data);


            $this->session->set_flashdata('message', 'Successfully uploaded');
            redirect('C_Feed');
        }else { 
            $error['error'] = $this->upload->display_errors();
            $this->load->view('index', $error);

        }
    }


}
