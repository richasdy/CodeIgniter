<?php

class m_photo extends CI_model {

    public function getAll() {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('user', 'user.username = photo.username');
        return $this->db->get()->result_array();
    }

    public function cariPost($search) {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('user', 'user.username = photo.username');
        $this->db->like('caption', $search);
        $this->db->or_like('user.username', $search);
		$this->db->or_like('location', $search);
		return $this->db->get()->result_array();
    }
    
    public function upload($username) {
        $this->load->helper(array('url','form'));
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '0';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile')) {
            return 'fail';
        } else {
            $file = $this->upload->data();
            $data = [
                "username" => $username,
                "url" => $file['file_name'],
                "caption" => $this->input->post('caption', true),
                "location" => $this->input->post('location', true),
                "likes" => 0,
            ];
            $this->db->insert('photo', $data);
        }
    }
}