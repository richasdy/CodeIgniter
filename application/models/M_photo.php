<?php

class M_photo extends CI_model {

    public function getAll() {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('user', 'user.username = photo.username');
        return $this->db->get()->result_array();
    }

    public function cariPost($search) {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('user', 'user.username = photo.username');
        $this->db->like('caption', $search);
        $this->db->or_like('user.username', $search);
		$this->db->or_like('location', $search);
		return $this->db->get()->result_array();
    }
    
    public function upload($data) {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->insert($data);
    }
}