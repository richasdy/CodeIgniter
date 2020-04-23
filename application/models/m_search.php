<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_search extends CI_Model
{
    public function index()
    {
        $this->load->view('page/feed');
    }

    public function cariCaption()
    {
        $keyword = $this->input->post('keyword', true);
        //use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"

        $this->db->like('username', $keyword);
        $this->db->or_like('desc', $keyword);
        $this->db->from('caption');
        $query = $this->db->get();
        return $query->result_array();
        //return data mahasiswa that has been searched
    }
}
