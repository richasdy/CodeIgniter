<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
 function __construct(){
  parent::__construct();
  $this->load->library('form_validation');
	$this->load->model('AllModel');
	$this->load->helper(array('url', 'form'));
 }
 
 public function index()
 {
		$this->load->view('templates/header');
		$this->load->view('view_upload');
		$this->load->view('templates/footer');
 }
 public function upload()
 {
	$config['upload_path']          = './assets/uploads/';
  $config['allowed_types']        = 'gif|jpg|png|jpeg';
  $config['max_size']             = 0;
  $config['max_width']            = 0;
  $config['max_height']           = 0;
 
  $this->load->library('upload', $config);
	$this->upload->initialize($config);
	
	if ( ! $this->upload->do_upload('uploadImage')){
    $data['error_message'] = $this->upload->display_errors();
    $this->load->view('templates/header');
		$this->load->view('view_upload', $data);
		$this->load->view('templates/footer');
  }else{
    $data = [
        "username" => $this->session->username,
				"url" => $this->upload->data('file_name'),
				"caption" => $this->input->post('caption'),
				"jml_like" => 0
    ];
    if($this->AllModel->insert_new_photo($data)) redirect('/feed');
    else{
        $data['error_message'] = "Error Upload";
        $this->load->view('templates/header');
				$this->load->view('view_upload', $data);
				$this->load->view('templates/footer');
    }
	}
 }
}
?>