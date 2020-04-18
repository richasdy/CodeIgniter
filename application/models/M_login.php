<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function index()
    {
        $this->load->view('feed');
    }
}
?>