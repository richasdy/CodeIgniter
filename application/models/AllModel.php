<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllModel extends CI_Model
{
    public function login($data) {
		  $query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('akun');
		  if($query->num_rows() > 0){
			  return true;
		  }else{
			  return false;
		  }
    }
    public function getPhoto()
    {
        $query = $this->db->get('photo');
        $returnArray['num_rows'] = $query->num_rows();
        $returnArray['result'] = $query->result();
        return $returnArray;
    }
    public function getProfile()
    {
        $query = $this->db->get('profile');
        $returnArray['num_rows'] = $query->num_rows();
        $returnArray['result'] = $query->result();
        return $returnArray;
    }
    public function getExplore(){
        $this->db->select('profile.name, profile.username, photo.url');
        $this->db->from('profile');
        $this->db->join('photo', 'profile.username = photo.username');
        return $this->db->get();
    }
     public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function cari($keyword)
    {
        $this->db->where('caption', $keyword);
        $query = $this->db->get('photo');
        if($query->num_rows() > 0){
			    return true;
		    }else{
			    return false;
		    }
    }
    public function update($where, $table, $data)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }
}
