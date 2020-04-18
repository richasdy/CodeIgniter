<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct(){
      parent::__construct();
      $this->load->model('model_IG');
      $this->load->library('session');
   }
 
   public function index()
   {
      $this->load->view('login'); 
   }
 
   public function aksi_login(){
      $data['username'] = $this->input->post('username');
      $data['password'] = $this->input->post('password');
      if($this->model_IG->login($data)) {
   	   $this->session->set_userdata('username', $this->input->post('username'));
         // $data_profile = $this->db->query("select * from profile where username='". $_SESSION['username']. "'");
         // $row_akun = $data_profile->result();

         // echo $row_akun;
         // $this->session->set_userdata('name', 'RifkiAlfianAbdiMalik');
         // $this->session->set_userdata('website', $row_akun['website']);
         // $this->session->set_userdata('email', $row_akun['email']);
         // $this->session->set_userdata('bio', $row_akun['bio']);
         // $this->session->set_userdata('nohp', $row_akun['nohp']);
         // $this->session->set_userdata('gender', $row_akun['gender']);
         // echo $row_akun['nama'];
      redirect('/feed');
      } else {
      redirect('/login');
      }
   }
}
?>