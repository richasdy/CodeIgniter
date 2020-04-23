<?php

class m_profile extends CI_model
{

    public function getProfile($uname)
    {
        //use query builder to insert $data to table "user"
        $query = $this->db->query("SELECT * FROM profile WHERE username = '" . $uname . "'");
        return $query->row_array();
    }

    public function editProfile($uname, $data)
    {
        $query = $this->db->where('username', $uname);
        $this->db->update('profile', $data);
    }

    public function getExplore($uname)
    {
        $query = $this->db->query("SELECT * FROM profile WHERE username NOT LIKE '" . $uname . "'");
        return $query->result_array();
    }
}
