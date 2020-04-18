<?php 
class M_profile extends CI_Model {
		
	public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('profile');
        return $query->row_array();
    }
    
	public function getPhoto($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('photo');
        return $query->result_array();
    }
}