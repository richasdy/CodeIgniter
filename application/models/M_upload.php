<?php

class M_upload extends CI_model {

	public function uploadPhoto($data) {
		$this->db->insert('photo', $data);
	}
}