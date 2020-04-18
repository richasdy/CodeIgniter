<?php
defined('BASEPATH') or exit('No direct script access allowed');

class id_model extends CI_Model
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
    public function getUserId($id)
    {
        return $this->db->get_where('profile', ["id" => $id])->row_array();
    }
}
