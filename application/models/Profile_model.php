<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_model
{
	private $_table = "profile";

	public $id;
	public $name;
	public $username;
	public $website;
	public $bio;
	public $email;
	public $phone;

	public function rules()
	{
		return [
			['field' => 'name',
			  'label' => 'Name',
			  'rules' => 'required'],

			 [
			  'field' => 'username',
			   'label' => 'Username',
			   'rules' => 'required'],

			 [
			  'field' => 'website',
			   'label' => '	Website',
			   'rules' => 'required'],

			 [
			  'field' => 'bio',
			   'label' => 'Bio',
			   'rules' => 'required'],

			  [
			  'field' => 'email',
			   'label' => 'Email',
			   'rules' => 'required'],

			   [
			  'field' => 'phone',
			   'label' => 'Phone',
			   'rules' => 'required'],
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])
	}

	public function submit()
	{
		$post = $this->input->post();
		$this->id = uniqid();
		$this->name = $post["name"];
		$this->username = $post["username"];
		$this->website = $post["website"];
		$this->bio = $post["bio"];
		$this->email = $post["email"];
		$this->phone = $post["phone"];
	}

	public function update()
	{
		$post = this->input->post();
		$this->id = $post["id"];
		$this->name = $post["name"];
		$this->username = $post["username"];
		$this->website = $post["website"];
		$this->bio = $post["bio"];
		$this->email = $post["email"];
		$this->phone = $post["phone"];
		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}
}