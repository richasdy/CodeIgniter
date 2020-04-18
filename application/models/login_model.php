<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function index()
    {
        $this->load->view('view_feed');
    }
}
