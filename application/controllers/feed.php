?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {
 function __construct(){
  parent::__construct();
    $this->load->library('form_validation');
		$this->load->model('AllModel');
 }
 
 public function index()
 {
		$this->load->view('templates/header');
		$data['feed'] = $this->AllModel->getPhoto();
		$this->load->view('view_feed', $data);
		$this->load->view('templates/footer');
 }
 
	public function search()
	{
		$keyword = $this->input->post('keyword');
		if($this->AllModel->cari($keyword)){
			$where = array('caption' => $keyword);
			$data['feed'] = $this->AllModel->getWhere($where, 'photo')->result();
			$this->load->view('templates/header');
			$this->load->view('view_search', $data);
			$this->load->view('templates/footer');	
		}else{
			$data['error_message'] = "No search results found";
			$this->load->view('templates/header');
			$this->load->view('view_search', $data);
			$this->load->view('templates/footer');
		}
	}
}
?>