<?php

class User extends CI_Model {

    public function login($data) {
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        $query = $this->db->get('user');
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    public function getUser($username) {
        $this->db->where('username',$username);
        $query = $this->db->get('user');
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    public function editUser($id, $data) {
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }

    public function getSomeUser($id) {
        $this->db->select('id_user_follow');
        $this->db->where('id_user',$id);
        $data = $this->db->get('follow')->result_array();

        foreach ($data as $following) {
            $id_user_follow[] = $following['id_user_follow'];
        }

        $this->db->where('id_user !=', $id);
        if (!empty($id_user_follow)) {
            $this->db->where_not_in('id_user', $id_user_follow);
        }
        return $this->db->get('user')->result();
    }

    public function searchUser($username, $id) {
        $this->db->where('id_user !=', $id);
        $this->db->like('username', $username);
        return $this->db->get('user')->result();
    }

}
