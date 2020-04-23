<?php

class m_photo extends CI_model
{
    public function getPhoto($uname)
    {
        $query = $this->db->query("SELECT * FROM photo WHERE username = '" . $uname . "'");
        return $query->result_array();
    }

    public function uploadPhoto($data)
    {
        $this->db->insert('photo', $data);
    }
}
