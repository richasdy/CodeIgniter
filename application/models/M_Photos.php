<?php

class M_Photos extends CI_Model { 

    public function getFeedData() { 
        $query = $this->db->query('SELECT user.username, photos.likes, url, caption, profpic FROM photos join profile JOIN user;');
        return $query->result(); 
    }

    public function upload($data){
        $this->db->insert("photos", $data);
    }

    public function search($searchkey) { 
        $qr = 'SELECT user.username, photos.likes, url, caption, profpic FROM photos join profile JOIN user WHERE caption LIKE "%'.$searchkey.'%"';
        $query = $this->db->query($qr);
        return $query->result();
    }

    

}


?>