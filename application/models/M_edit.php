<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_edit extends CI_Model
{
    public function index()
    {
        $this->load->view('page/feed');
    }

    function gett($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
