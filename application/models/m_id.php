<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_id extends CI_Model
{
    public function index()
    {
        $this->load->view('view_login');
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function getUser()
    {
        return $this->db->get('profile');
    }
    public function getCap()
    {
        return $this->db->get('caption');
    }
    public function getUserId($username)
    {
        return $this->db->get_where('profile', ["username" => $username])->row_array();
    }

    public function login($data)
    {
        $query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('akun');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getProfile()
    {
        return $this->db->get('profile');
    }
    public function getPhoto()
    {
        return $this->db->get('photo');
    }
    public function getExplore()
    {
        $this->db->select('profile.name, profile.username, photo.url');
        $this->db->from('profile');
        $this->db->join('photo', 'profile.username = photo.username');
        return $this->db->get();
    }
    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $table, $data)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }
    public function cari($keyword)
    {
        $this->db->where('username', $keyword);
        $query = $this->db->get('photo');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function insert_new_photo($data)
    {
        if ($this->db->insert('photo', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
