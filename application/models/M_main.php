<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_main extends CI_Model
{
    public function index()
    {
        $this->load->view('login');
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function getUser()
    {
        return $this->db->get('profile');
    }
    public function getCapt()
    {
        return $this->db->get('caption');
    }
    public function getUserId($id)
    {
        return $this->db->get_where('profile', ["id" => $id])->row_array();
    }
}
