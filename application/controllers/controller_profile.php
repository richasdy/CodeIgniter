<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

// =============================================================================================================

    //<p><?= $this->session->userdata('username') </p>
    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');
    // =================================================

        $data['profile'] = $this->model_instagram->cariprofile();
        $data['posting'] = $this->model_instagram->Post();
        $this->model_instagram->jumlahPost();
        $this->load->view('view_profile', $data);
    }

}