<?php

class User_model extends CI_Model {

    public function login($data_user) {
        $this->db->where('username',$data_user['username']);
        $this->db->where('password',$data_user['password']);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    public function getUser($username) {
        $this->db->where('username',$username);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    public function editUser($id, $data_user) {
        $this->db->where('id_user',$id);
        $this->db->update('users',$data_user);
    }

    public function getSomeUser($id) {
        $this->db->select('id_user_follow');
        $this->db->where('id_user',$id);
        $data_user = $this->db->get('follow')->result_array();

        foreach ($data_user as $following) {
            $id_user_follow[] = $following['id_user_follow'];
        }

        $this->db->where('id_user !=', $id);
        if (!empty($id_user_follow)) {
            $this->db->where_not_in('id_user', $id_user_follow);
        }
        return $this->db->get('users')->result();
    }

    public function searchUser($username, $id) {
        $this->db->where('id_user !=', $id);
        $this->db->like('username', $username);
        return $this->db->get('users')->result();
    }

}