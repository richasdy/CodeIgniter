<?php
class M_feed extends CI_model {
    
	public function getFeed() {
		// $query = $this->db->query("SELECT * FROM photo NATURAL JOIN profile WHERE photo.username = profile.username");
		// return $query->result_array();
		$this->db->select('*');
		$this->db->from('photo');
		$this->db->join('profile', 'photo.username = profile.username', 'inner');
		$query = $this->db->get();
		return $query->result_array(); 
	}
}