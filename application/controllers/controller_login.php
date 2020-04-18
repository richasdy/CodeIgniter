<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_login extends CI_Controller {

    public function construct() {
        parent::construct();
        $this->load->library('session');

        
    }

// =============================================================================================================
// sumber :https://codeigniter.com/userguide3/libraries/form_validation.html

    public function index() { 
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');
        // =================================================

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
                if ($this->form_validation->run() == FALSE) 
                {
                    
                    $this->load->view('view_login');
                    
                }
                else 
                {
                    $this->load->model('model_instagram');
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $result = $this->model_instagram->login($username, $password);

                    if ($result == 'fail') 
                    {
                        $this->session->set_flashdata('flash','Sorry, your username or password was incorrect. Please double-check your password.');
                        redirect('controller_login');
                    } 
                    else 
                    {
                        // $this->load->view('controller_feed');
                        redirect('controller_feed');
                    }
                }

    }

    public function logout() {
        $this->session->unset_userdata('username');
        redirect('controller_login');
    }


}