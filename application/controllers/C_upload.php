<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_profile');
		$this->load->model('M_upload');
	}

	public function index() {
        $user = $this->session->userdata('username');
        $data['profile'] = $this->M_profile->getProfile($user);
        $data['photo'] = $this->M_profile->getPhoto($user);
		$this->load->view('V_upload',$data);
	}

    public function do_upload() {
        $user = $this->session->userdata('username');

        $config['upload_path'] = './assets/images/';      
        $config['allowed_types'] = ['png','jpg','gif','jpeg'];   
        $config['max_size'] = 0;                
        $config['max_width'] = 0;                   
        $config['max_height'] = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile')) {   //upload gagal
            $this->session->set_flashdata('flash',$this->upload->display_errors());
            redirect('C_upload',$data);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data = array(
                'photoname' => $file_name,
                'username' => $user,
                'likes' => 0,
                'comment' => 0,
                'caption' => $this->input->post('caption'),
                'location' => $this->input->post('location')
            );

            $this->M_upload->uploadPhoto($data);
            $this->session->set_flashdata('upload_success','Photo uploaded');
            redirect('C_profile');
        }
    }
}