<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_upload extends CI_Model
{
    public function view()
    {
        return $this->db->get('photo')->result();
    }

    public function upload()
    {
        $config['upload_path'] = './upload/info/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']    = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_gambar')) {
            // Kalo bisa nih bree :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Waduh gagal euy kesini mah :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $data = array(
            'gambar' => $upload['file']['file_name'],
            'caption' => $this->input->post('input_caption'),
            'like' => $this->input->post('input_like')
        );

        $this->db->insert('photo', $data);
    }
}
