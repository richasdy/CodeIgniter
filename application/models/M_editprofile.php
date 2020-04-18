<?php 
class M_editprofile extends CI_Model {
		
	public function editprofile($username,$data) {
		$data = [
			"name" => $this->input->post('name'),
			"website" => $this->input->post('website'),
			"bio" => $this->input->post('bio'),
			"email" => $this->input->post('email'),
			"phonenumber" => $this->input->post('phonenumber'),
			"gender" => $this->input->post('gender'),
		];
		$this->db->where('username', $username);
        return $this->db->update('profile', $data);
	}
}
?>