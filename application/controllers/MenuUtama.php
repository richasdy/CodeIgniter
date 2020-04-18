<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuUtama extends CI_Controller {

    public function index()
	{
		$this->load->view('index.php');
    }

    public function cekAkun(){
		$this->db->from('aktifkan');
		$this->db->truncate();
        $this->load->model('ModelLogin');
		$keyword1 = $this->input->post('usernamee');
		$keyword2 = $this->input->post('passwordd');
		$kebenaran = $this->ModelLogin->cekData($keyword1, 'user');
		if (!empty($kebenaran)){
			$data['username'] = $keyword1;
			foreach ($kebenaran as $keb) :
				if($keb['password'] == $keyword2) {
					$dataa['aktif'] = $keb['username'];
					$this->ModelLogin->inputAktif($dataa, 'aktifkan');
					redirect('MenuFeed/index');
				} else {
					redirect('MenuUtama/index');
				}
			endforeach;
		} else {
			redirect('MenuUtama/index');
		}
	}

	public function update()
	{
		$this->load->model('ModelLogin');
		$nama = $this->input->post("nama");
		$usernama = $this->input->post("username");
		$web = $this->input->post("website");
		$bio = $this->input->post("bio");
		$email = $this->input->post("email");
		$hp = $this->input->post("phone");
		$jk = $this->input->post("gender");

		$data = [
			'name' => $nama,
			'username' => $usernama,
			'website' => $web,
			'bio' => $bio,
			'email' => $email,
			'p_number' => $hp,
			'gender' => $jk
		];
		if(!empty($usernama)){
			$dataa['aktif'] = $usernama;
			$this->ModelLogin->inputAktif($dataa, 'aktifkan');
		}
		$namaaktif = $this->ModelLogin->ambilAktif();
		foreach ($namaaktif as $akt) :
			$this->ModelLogin->input($data, $akt['aktif']);
		endforeach;
		redirect('MenuFeed/profil');
	}
}