<?php 
class model_IG extends CI_Model{
		
	public function login($data) {
		$query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('user');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	
	public function get_profile($username){
		if($this->db->where('username', $username)){
			return $this->db->get('user')->row_array();
		}else{
			return false;
		}
	}
	public function get_datafoto(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('photo','user.username=user.username','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	public function edit_profile($username,$data)
	{
		$data = [
			"name" => $this->input->post('name', true),
			"website" => $this->input->post('website', true),
			"bio" => $this->input->post('bio', true),
			"email" => $this->input->post('email', true),
			"nohp" => $this->input->post('nohp', true),
			"gender" => $this->input->post('gender', true),
		];
		$this->db->where('username', $username);
		return $this->db->update('profile', $data);
	}
	public function insert_user($data1,$data2){
		$insert1 = $this->db->insert('user', $data1);
		$insert2 = $this->db->insert('profile', $data2);
		if($insert1 && $insert2){
			return true;
		}else{
			return false;
		}
	}
	public function check_username($username){
		$query = $this->db->where('username',$username)->get('user');
		$count = $query->num_rows();
		if($count > 0){
			return true;
		}else{
			return false;
		}
	}
	public function insert_foto($data){
		if($this->db->insert('photo', $data)){
			return true;
		}else{
			return false;
		}
	}
}
?>