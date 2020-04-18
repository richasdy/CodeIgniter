<?php

class ModelLogin extends CI_Model {
    public function cekData($keyword1){
        $this->db->from('user');
        $this->db->where('username', $keyword1);
        return $this->db->get()->result_array();
    }

    public function ambilAktif(){
        $this->db->from('aktifkan');
        return $this->db->get()->result_array();
    }

    public function input($data, $namaaktif){
        $this->db->from('user');
        $this->db->where('username', $namaaktif);
        $this->db->update('user', $data);
    }

    public function inputAktif($usernama){
        $this->db->insert('aktifkan', $usernama);
    }

   

}