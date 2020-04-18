<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_editprofile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_instagram');
        $this->load->library('session');
    }
     
    public function index() {
        $this->load->view('View_editprofile'); 
    }

    public function editprofile() {
         $dataEdit = [
             "name" => $this->input->post('name', true),
             "website" => $this->input->post('website', true),
             "bio" => $this->input->post('bio', true),
             "email" => $this->input->post('email', true),
             "phone" => $this->input->post('phone', true),
             "gender" => $this->input->post('gender', true),
         ];
         $this->Model_instagram->edit_profile($_SESSION['username'], $dataEdit);
         redirect('/Controller_profile','refresh');
     }
}
?>