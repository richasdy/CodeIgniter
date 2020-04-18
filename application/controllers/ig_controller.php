<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ig_controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('Login');
    }

    $this->load->model('ig_model');
  }

  public function index() {
    $this->load->view('profile');
  }
  public function edit_Profile() {
    $this->load->view('edit-profile');
  }

  public function feed() {
    $this->load->view('feed');
  }

  public function explore() {
    $this->load->view('explore');
  }

}
/* End of file ig_controller.php */
/* Location: ./application/controllers/ig_controller.php */

?>