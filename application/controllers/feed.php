<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feed extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_feed');
    }

    public function index()
    {
        $data['title'] = 'Feed';
        $data['feed'] = $this->m_feed->getAllFeed();

        $this->load->view('templates/header', $data);
        $this->load->view('view_feed', $data);
        $this->load->view('templates/footer');
    }
}
