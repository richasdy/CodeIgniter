<?php

class M_Photos extends CI_Model { 

    public function getFeedData() { 
        $query = $this->db->query('SELECT photo.username, photo.like, url, caption, profpic FROM photo join profile;');
        return $query->result(); 
    }

    public function upload($data){
        $this->db->insert("photo", $data);
    }

    

}


?>