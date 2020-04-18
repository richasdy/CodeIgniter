<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_upload extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');

	}

	
    public function index()
    {

        $this->load->helper(array('form','url','file'));
        $this->load->library('form_validation');
        $this->load->model('model_instagram');


        $this->load->view('view_upload');
        $akun = $this->session->userdata('akun');
        $new_name = 'feed_'.$akun['username'];      /

        $config['upload_path'] = './assets/images/';      
        $config['allowed_types'] = ['png','jpg','gif','jpeg'];   
        $config['max_size'] = 0;                
        $config['max_width'] = 0;                   
        $config['max_height'] = 0;
        $config['file_name'] = $new_name;          

        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);



    
        

    }
		
	
// }

