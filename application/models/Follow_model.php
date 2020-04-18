<?php

class follow_model extends CI_Model {

    public function checkFollowing($data_user) {
        $this->db->where('id_user',$data_user['id_user']);
        $this->db->where('id_user_follow',$data_user['id_user_follow']);
        $query = $this->db->get('follow');
        return ($query->num_rows() > 0) ? true : false;
    }

    public function addFollowing($data_user){
        $this->db->insert('follow',$data_user);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function getFollowing($id_user) {
        $this->db->where('id_user',$id_user);
        $query = $this->db->get('follow');
        return $query->num_rows();
    }

    public function getFollowers($id_user) {
        $this->db->where('id_user_follow',$id_user);
        $query = $this->db->get('follow');
        return $query->num_rows();
    }
}