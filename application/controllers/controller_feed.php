<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_feed extends CI_Controller {

    public function construct() {
        parent::construct();
    
        $this->load->library('session');
        
    }

// =============================================================================================================

    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');
        
        // =================================================

        $data['post'] = $this->model_instagram->tampil();

        if ($this->input->post('keyword')) 
        {
            $data['post'] = $this->model_instagram->cariPost();
        }

        $this->load->view('view_feed', $data);

    }
// =============================================================================================================



    public function cari() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');
        // =================================================

        $this->load->model('model_instagram');
        $cari = $this->input->get('cari');
        $data['post']=$this->model_instagram->cariPost($cari);
        $this->load->view('view_feed', $data);
    }
}