<?php

class model_instagram extends CI_model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('akun');
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                $this->session->set_userdata('username', $username);
            }
        } else {
            return 'fail';
        }
    }

    public function cariprofile() {
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $username);
        $query = $this->db->get()->result_array();
        return $query[0];
    }

    public function Post() {
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->where('username', $username);


        return $this->db->get()->result_array();
    }

    public function jumlahPost() {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $num = $this->db->count_all_results('photo');
        $this->session->set_userdata('jumlahPost', $num);
    }

    public function tampil() {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('akun', 'akun.username = photo.username');
        return $this->db->get()->result_array();
    }

    public function cariPost($cari) {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('akun', 'akun.username = photo.username');
        $this->db->like('caption', $cari);
        $this->db->or_like('akun.username', $cari);
        $this->db->or_like('location', $cari);
        return $this->db->get()->result_array();
    }

    public function editprofile($data) {
        $old = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $old);
        $this->db->update('akun', $data);

        $username = [
            "username" => $this->input->post('username', true),
        ];
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->where('username', $old);
        $this->db->update('photo', $username);
        $this->session->set_userdata('username', $this->input->post('username', true));

    }

    public function signup($data)
       {
            $this->db->insert('akun',$data);
       }

    public function uploadPhoto($data)
        {
            $this->db->insert('photo', $data);
        }

    





}