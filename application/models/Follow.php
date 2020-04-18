<?php

class Follow extends CI_Model {

    public function checkFollowing($data) {
        $this->db->where('id_user',$data['id_user']);
        $this->db->where('id_user_follow',$data['id_user_follow']);
        $query = $this->db->get('follow');
        return ($query->num_rows() > 0) ? true : false;
    }

    public function addFollowing($data){
        $this->db->insert('follow',$data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function getFollowing($id) {
        $this->db->where('id_user',$id);
        $query = $this->db->get('follow');
        return $query->num_rows();
    }

    public function getFollowers($id) {
        $this->db->where('id_user_follow',$id);
        $query = $this->db->get('follow');
        return $query->num_rows();
    }
}
