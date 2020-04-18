<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $user = $this->session->userdata('username');
        if ($user) {
            $data['profile_d'] = $this->db_Model->getprofile($user);
            $data['uploadedphoto'] = $this->db_Model->profilephotos($user);
            $data['jumlah'] = $this->db_Model->countphoto($user);
            // echo "masukkkk";
            // echo $data['name'];
            $data['title'] = $user;
            $this->load->view('templates/headermenu', $data);
            $this->load->view('menu/profile', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('/Login');
        }
    }

    public function gotoupdate()
    {
        $user = $this->session->userdata('username');
        if ($user) {
            $data['title'] = "update Profile";
            $data['profile_d'] = $this->db_Model->getprofile($user);
            $this->load->view('templates/headermenu', $data);
            $this->load->view('menu/update');
            $this->load->view('templates/footer');
        } else {
            redirect('/C_login');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[profile.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        if ($this->form_validation->run() == false) {
            $user = $this->session->userdata('username');
            $data['title'] = "update Profile";
            $data['profile_d'] = $this->db_Model->getprofile($user);
            $this->load->view('templates/headermenu', $data);
            $this->load->view('menu/update');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'prevuser' => $this->session->userdata('username'),
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'website' => $this->input->post('website'),
                'bio' => $this->input->post('bio'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone'),
                'gender' => $this->input->post('gender')
            ];

            // echo $data['prevuser'];
            $this->db_Model->replaceprofile($data);
            $this->db_Model->replaceaccount($data);
            $this->db_Model->replacephotouser($data);
            $this->session->set_userdata('username', $data['username']);

            redirect('/C_profile');
        }
    }
}
