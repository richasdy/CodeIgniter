<?php

class M_User extends CI_Model { 


 
    public function login($username, $password) { 
        $this->db->like('username', $username);
        $this->db->like('password', $password);
        $query = $this->db->get('user'); 
        if ($query->row() != NULL) { 
            return true;
        }else { 
            return false;
        }
    }

    public function getUserID($username) { 
        $query = $this->db->query("SELECT idUser FROM user where username LIKE '$username'");
        return $query->row();
    }

    public function loadProfile($username) { 
        $query = $this->db->query("SELECT * FROM profile WHERE username LIKE '$username'");
        return $query->row();
    }

    public function userUploads($idUser) { 
        $query = $this->db->query("SELECT * FROM photos WHERE idUser LIKE '$idUser'");
        return $query->result();
    }

    public function updateProfile($data, $username) { 
         $query = $this->db->query("
            UPDATE profile
            SET 
            name = '$data->name',
            website = '$data->website',
            bio = '$data->bio',
            email = '$data->email',
            phonenumber = '$data->phonenumber',
            gender = '$data->gender'
            WHERE username = '$username'

         ");
    }

    public function updateUsername($username, $us) { 
        $query = $this->db->query("UPDATE user SET username = '$username' WHERE username = '$us'");
    }

    public function editProfpic($profpic, $username) { 
        $query = $this->db->query("UPDATE profile SET profpic = '$profpic' WHERE username = '$username'");
    }


}


?>