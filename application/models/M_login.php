<?php 
class M_login extends CI_Model {
		
	public function login($data) {
		$query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('user');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
}
?>