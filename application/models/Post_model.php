<?php

class post_model extends CI_Model {

    public function getAllPost() {
        $this->db->join('users', 'post.id_user = users.id_user');
        return $this->db->get('post')->result();
    }
    
    public function getPost($id_user) {
        $this->db->where('id_user',$id_user);
        $query = $this->db->get('post');
        return $query->num_rows();
    }
    
    public function getUserPost($id_user) {
        $this->db->where('id_user',$id_user);
        return $this->db->get('post')->result();
    }
}