<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpdateModel extends CI_Model
{
    public function index()
    {
        $this->load->view('page/feed');
    }

    function ambil_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
