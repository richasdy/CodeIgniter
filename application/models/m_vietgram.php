<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_vietgram extends CI_model{

    public function login($data){
        $query = $this->db->where('username', $data['username']);
        $query = $this->db->where('password', $data['password']);
        $query = $this->db->get('account');
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
    
    public function get_profile($username){
        $this->db->where('username', $username);
        return $this->db->get('profile');
    }

    public function get_allPhotos(){
        return $this->db->query('select photo.username, photo.url, photo.caption, photo.jml_like, profile.profile_photos from photo INNER join profile on photo.username = profile.username');
    }

    public function get_userPhoto($username){
        $this->db->where('username', $username);
        return $this->db->get('photo');
    }
    
    public function updateProfile($username, $data){
        $this->db->set($data);
        $this->db->where('username', $username);
        return $this->db->update('profile');
    }

    public function searchCaption($caption){
        $this->db->select('photo.username, photo.url, photo.caption, photo.jml_like, profile.profile_photos');
        $this->db->from('photo');
        $this->db->join('profile', 'photo.username = profile.username');
        $this->db->where('caption', $caption);
        return $this->db->get();
    }

    public function uploadPhoto($data){
        if($this->db->insert('photo', $data)){
            return true;
        } else{
            return false;
        }
    }
}


?>