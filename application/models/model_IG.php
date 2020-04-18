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
}
?>