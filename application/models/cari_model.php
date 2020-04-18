<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cari_model extends CI_Model
{
    public function index()
    {
        $this->load->view('page/feed');
    }

    public function cariCaption()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('username', $keyword);
        $this->db->or_like('desc', $keyword);
        $this->db->from('caption');
        $query = $this->db->get();
        return $query->result_array();
      
    }
}
