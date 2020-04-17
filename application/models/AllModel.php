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
}
