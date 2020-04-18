<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logout extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_vietgram');
    }

    
}

?>