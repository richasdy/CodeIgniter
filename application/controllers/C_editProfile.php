<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_editProfile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_vietgram');
    }

    public function index(){
        $this->load->view('v_header');
        //Mengambil profile untuk session
        $username = $this->session->userdata('username');
        $data['profile'] = $this->m_vietgram->get_profile($username)->row();
        $this->load->view('v_edit-profile', $data);
        $this->load->view('v_footer');
    }

    public function updateProfile(){
        $data = [
            'name' => $this->input->post('nama'),
            'website'  => $this->input->post('website'),
            'bio'  => $this->input->post('bio'),
            'email'  => $this->input->post('email'),
            'phone_number'  => $this->input->post('phone'),
            'gender'  => $this->input->post('gender')
        ];
        $username = $this->session->userdata('username');
        $this->m_vietgram->updateProfile($username,$data);

        redirect('/C_profile');
    }
}
?>