<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class C_index extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->helper(array('url', 'form'));
            $this->load->model('m_vietgram');
        }

        public function index(){
            $this->load->view('v_index');
            $this->load->view('v_footer');
        }

        public function login(){
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            if($this->m_vietgram->login($data)){
                $this->session->set_userdata('username', $this->input->post('username'));
                $this->session->set_userdata('password', $this->input->post('password'));
                redirect('/c_feed');
            }else{
                $data['error_message'] = "invalid username/password";
                $this->load->view('v_index', $data);
                $this->load->view('v_footer');
            }
        }

        public function logout(){
            session_destroy();
            $data['logout_status'] = "sad";
            $this->load->view('v_index', $data);
            $this->load->view('v_footer');
        }
    }
?>