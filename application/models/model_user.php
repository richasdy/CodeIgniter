<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent:: __construct();
	}
  
  public function login($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    return $this->db->get('user')->row_array();
  }
	public function get_User()
	{
		return $this->db->get('user')->result_array();
  }
  public function get_UserbyUsername($username)
	{
    $this->db->where('username',$username);
		return $this->db->get('user')->row_array();
  }
  public function insert_User($data)
	{
		return $this->db->insert('user',$data);
  }
  public function update_User($username,$data)
	{
    $this->db->where('username',$username);
		return $this->db->update('user',$data);
  }
  public function delete_UserbyId($id)
	{
    $this->db->where('id',$id);
		return $this->db->delete('user');
  }
}
