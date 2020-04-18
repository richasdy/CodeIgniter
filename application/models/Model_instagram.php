<?php 
class Model_instagram extends CI_Model {
		
	public function login($data) {
		$dataLogin = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('user');
		if($dataLogin->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function get_profile($username) {
		if($this->db->where('username', $username)) {
			return $this->db->get('user')->row_array();
		} else {
			return false;
		}
	}

	public function get_datafoto() {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('photo','user.username=user.username','LEFT OUTER');
		$dataFoto = $this->db->get();
		return $dataFoto->result();
	}

	public function edit_profile($username,$dataUser) {
		$dataUser = [
			"name" => $this->input->post('name', true),
			"website" => $this->input->post('website', true),
			"bio" => $this->input->post('bio', true),
			"email" => $this->input->post('email', true),
			"nohp" => $this->input->post('nohp', true),
			"gender" => $this->input->post('gender', true),
		];
		$this->db->where('username', $username);
        return $this->db->update('profile', $dataUser);
	}
}
?>