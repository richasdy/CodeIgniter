<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Explore extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_profile');
    }

    public function index()
    {
        $data['title'] = 'Feed';
        $user = $this->session->userdata('user');
        $data['friends'] = $this->m_profile->getExplore($user['username']);
        $this->load->view('templates/header', $data);
        $this->load->view('view_explore', $data);
        $this->load->view('templates/footer');
    }
}
