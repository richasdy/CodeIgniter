<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_photo extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_profile');
        $this->load->model('m_photo');
    }

    public function index()
    {
        $data['title'] = 'Upload';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->m_profile->getProfile($user['username']);
        $data['photo'] = $this->m_photo->getPhoto($user['username']);

        $this->load->view('templates/header', $data);
        $this->load->view('view_upload', $data);
        $this->load->view('templates/footer');
    }

    public function do_upload()
    {
        $user = $this->session->userdata('user');
        $new_name = '_' . $user['username'];

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = ['png', 'jpg', 'gif', 'jpeg'];
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $this->session->set_flashdata('flash', $this->upload->display_errors());
            redirect('upload_photo', $data);
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

            $this->m_photo->uploadPhoto($data);
            $this->session->set_flashdata('upload_success', 'Photo uploaded');
            redirect('profile');
        }
    }
}
