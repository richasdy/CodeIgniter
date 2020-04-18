<?php

class M_explore extends CI_model {
    
    public function getExplore($username) {
		$query = $this->db->query("SELECT * FROM profile WHERE username NOT LIKE '".$username."'");
		return $query->result_array();
	}

}