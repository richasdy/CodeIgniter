<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class controller_register extends CI_Controller {
     
     public function __construct(){
         parent::__construct();
         $this->load->library('session');
     }
 
     public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');
    // =================================================
         
         $this->form_validation->set_rules('username', 'Username','required');
         $this->form_validation->set_rules('password','Password','required');
         $this->form_validation->set_rules('email','Email','required');
         $this->form_validation->set_rules('name','Name','required');
         
         if($this->form_validation->run() == FALSE) 
         {
             $this->load->view('view_register');
         }
         else
         {
 
             $data['username'] =    $this->input->post('username');
             $data['password']   =    $this->input->post('password');
             $data['email']  =    $this->input->post('email');
             $data['name'] =    $this->input->post('name');
             $data["photo_profile"] = "profilepic.png";
            

             $this->model_instagram->signup($data);

             redirect('controller_login');
         }
     }
 }