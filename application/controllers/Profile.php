<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("profile_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["products"] = $this->profile_model->getAll();
		$this->load->view("view_profile", $data);
	}

	public edit($id = null)
	{
		if (!isset($id)) redirect('edit_profile');

		$profile = $this->profile_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()){
			$profile->update();
			$this->session->set_flashdata('success','Data Updated!');
		}

		$data["profile"] = $profile->getById($id);
		if (!$data["profile"]) show_404();

		$this->load->view("editprofile",$data);
	}

}