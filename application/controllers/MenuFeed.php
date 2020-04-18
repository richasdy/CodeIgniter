<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuFeed extends CI_Controller {

    public function index()
	{
		$this->load->view('feed.php');
    }

    public function profil()
    {
        $this->load->model('ModelLogin');
        $aktif = $this->ModelLogin->ambilAktif();
        foreach ($aktif as $ak) :
            $a = $ak['aktif'];
        endforeach;
        $dataAkun = $this->ModelLogin->cekData($a);
        foreach ($dataAkun as $dA) :
            $data = [
                'username' => $dA['username'],
                'bio' => $dA['bio'],
                'website' => $dA['website'],
                'name' => $dA['name']
            ];
        endforeach;
        $this->load->view("profile.php", $data);
    }

    public function edit(){
        $this->load->model('ModelLogin');
        $aktif = $this->ModelLogin->ambilAktif();
        foreach ($aktif as $ak) :
            $data['namaAktif'] = $ak['aktif'];
        endforeach;
        $this->load->view("edit-profile.php", $data);
    }
}