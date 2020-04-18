<?php
class Vietgram_m extends CI_Model{

	public function cek_login($username,$password)
	{
		$query = $this->db->query("SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");
		return $query->result_array();
	}
	
	public function signup(){
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true)
		];
		$this->db->insert('user', $data);
	}

	public function logout(){
		session_start();

		$_SESSION = [];
		session_unset();
		session_destroy();

		echo "<script>
			document.location.href = 'index.php';
			</script>
			";
		exit;
	}

	public function getAllFeed()
	{
		$query = $this->db->query("SELECT * FROM photo NATURAL JOIN profile WHERE photo.username = profile.username");
		return $query->result_array();
	}

	public function getProfile($username)
	{
		$query = $this->db->query("SELECT * FROM profile WHERE username = '".$username."'");
		return $query->row_array();
	}

	public function editProfile($username,$data)
	{
		$query = $this->db->where('username',$username);
		$this->db->update('profile',$data);
	}

	public function getExplore($username)
	{
		$query = $this->db->query("SELECT * FROM profile WHERE username NOT LIKE '".$username."'");
		return $query->result_array();
	}

	public function getPhoto($username)
	{
		$query = $this->db->query("SELECT * FROM photo WHERE username = '".$username."'");
		return $query->result_array();
	}

	public function uploadPhoto($data)
	{
		$this->db->insert('photo', $data);
	}

	public function getAllComments()
	{
		$query = $this->db->query("SELECT * FROM comments");
		return $query->result_array();
	}

	public function getComments($username)
	{
		$query = $this->db->query("SELECT * FROM profile WHERE username = '".$username."'");
		return $query->row_array();
	}

}
?>