<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feed extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_IG');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if($this->session->userdata('username')){
			// $dataUser = $this->model_IG->get_datafoto();
			$data = $this->model_IG->get_profile($this->session->userdata('username'));
			$this->load->view('feed',$data);
		}else{
			redirect('/login');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/login'); 
	}
	public function upload(){
		$i = 1;
		$config['upload_path']          = './assets/images/fotouser/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $_SESSION['username']-$i;
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$file = array('upload_data' => $this->upload->data());
			$data = [
				"url" => $this->input->post('namafile', true),
				"caption" => $this->input->post('caption', true),
			];
    	if($this->model_IG->insert_foto($data)){
      		redirect('/feed');
    	}
		
	}
}
?>