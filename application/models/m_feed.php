<?php

class m_feed extends CI_model
{
    public function getAllFeed()
    {
        $query = $this->db->query("SELECT * FROM photo NATURAL JOIN profile WHERE photo.username = profile.username");
        return $query->result_array();
    }
}
