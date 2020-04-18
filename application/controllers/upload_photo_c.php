<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_photo_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vietgram_m');
		$this->load->model('vietgram_m');
	}

	public function index()
	{
        $data['title'] = 'Upload | Vietgram';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->vietgram_m->getProfile($user['username']);
        $data['photo'] = $this->vietgram_m->getPhoto($user['username']);
       
        $this->load->view('header',$data);
		$this->load->view('upload-photo_c',$data);
		$this->load->view('footer');
	}

    public function do_upload()
    {
        $user = $this->session->userdata('user');
        $new_name = 'feed_'.$user['username'];

        $config['upload_path'] = './assets/images/';      
        $config['allowed_types'] = ['png','jpg','gif','jpeg'];   
        $config['max_size'] = 0;                
        $config['max_width'] = 0;                   
        $config['max_height'] = 0;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile')) {  
            $this->session->set_flashdata('flash',$this->upload->display_errors());
            redirect('upload_photo_c',$data);
        } else {
            $upload_data = $this->upload->data();     
            $file_name = $upload_data['file_name'];
            $data = array(
                'photo_name' => $file_name,
                'username' => $user['username'],
                'likes' => 0,
                'comment' => 0,
                'caption' => $this->input->post('caption'),
                'location' => $this->input->post('location')
            );

            $this->vietgram_m->uploadPhoto($data);
            $this->session->set_flashdata('upload_success','Photo uploaded');
            redirect('profile');
        }
    }
}
