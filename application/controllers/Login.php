<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ig_model');
	}

	public function index() {
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
    	$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
      		$this->load->view('view_login');
    	} else {
      		$this->do_login();
    	}
	}

	private function do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->ig_model->login($username, $password);
		if ($user) { 
			$profile = $this->ig_model->getProfile($user['username']);

			$this->session->set_userdata($profile);
			redirect('ig_controller');
		} else {
			redirect('Login');
		}
	}

	public function do_logout() {
		$this->session->unset_userdata('username');
		redirect('Login');
	}
	
}
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

?>
