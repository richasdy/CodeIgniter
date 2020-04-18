<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_edit extends CI_Controller {

    public function construct() {
        parent::construct();
        
        $this->load->library('session');
    }

    public function index() {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');  //<---------loaded.
        $this->load->model('model_instagram');

    // =================================================

        $this->form_validation->set_rules('name', 'username', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'password', 'required');
        $data['profile'] = $this->model_instagram->cariProfile();

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('view_edit', $data);
        } 
        else 
        {
            $this->load->model('model_instagram');
            $data = [
                "name" => $this->input->post('name', true),
                "username" => $this->input->post('username', true),
                "website" => $this->input->post('web', true),
                "bio" => $this->input->post('bio', true),
                "email" => $this->input->post('email', true),
                "phone" => $this->input->post('phone', true),
                "gender" => $this->input->post('gender', true),
            ];
            $result = $this->model_instagram->editprofile($data);

            redirect('controller_profile');
        }
    }
}