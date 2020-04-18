<?php 
class IG_model extends CI_Model{
		
	public function login($data) {
		$query = $this->db->where('username', $data['username'])->where('passwd', $data['password'])->get('akun_user');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	
	public function get_profile($username){
		if($this->db->where('username', $username)){
			return $this->db->get('tbl_profile')->row_array();
		}else{
			return false;
		}
	}
	public function get_datafoto(){
		$this->db->select('*');
		$this->db->from('akun_user');
		$this->db->join('tbl_photo','akun_user.username=akun_user.username','LEFT OUTER');
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
			"no_hp" => $this->input->post('no_hp', true),
			"gender" => $this->input->post('gender', true),
		];
		$this->db->where('username', $username);
        return $this->db->update('tbl_profile', $data);
	}
}
?>