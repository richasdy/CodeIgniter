<?php

class m_user extends CI_model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                $this->session->set_userdata('username', $username);
            }
        } else {
            return 'fail';
        }
    }

    public function getProfile() {
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get()->result_array();
        return $query[0];
    }

    public function getPost() {
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->where('username', $username);
        
        
        return $this->db->get()->result_array();
    }

    public function countPost() {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $num = $this->db->count_all_results('photo');
        $this->session->set_userdata('postCount', $num);
    }

    public function edit($data) {
        $old = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $old);
        $this->db->update('user', $data);

        $username = [
            "username" => $this->input->post('username', true),
        ];
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->where('username', $old);
        $this->db->update('photo', $username);
        $this->session->set_userdata('username', $this->input->post('username', true));

    }
}