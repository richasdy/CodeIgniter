<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->model('Model_instagram');
      $this->load->library('session');
    }

    public function index() {
      $this->load->view('View_login');
    }

    public function operasi_login() {
      $data['username'] = $this->input->post('username');
      $data['password'] = $this->input->post('password');
      if($this->Model_instagram->login($data)) {
        $this->session->set_userdata('username', $this->input->post('username'));
        redirect('/Controller_feed');
      } else {
        redirect('/Controller_login');
      }
    }
}
?>
