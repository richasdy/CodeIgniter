<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_EditProfile extends CI_Controller {


    public function __construct() { 
        parent::__construct();
        $this->load->model("M_User");

    }

    public function index() { 
        $data['profile'] = $this->M_User->loadProfile($this->session->userdata("username"));
        $this->load->view("edit-profile", $data);
    
    }

    public function login() { 

        $username = $this->input->post("username");
        $password = $this->input->post("password"); 

        $check = $this->M_User->login($username, $password);
        if ($check) {
            $this->session->set_userdata("username", $username); 
            redirect('C_Feed');
        }else { 

            $message = "username or password is wrong";
            $this->session->set_flashdata('message', $message);
            $this->load->view("index");
        }
    }

    public function editProfpic() {
        $config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
	
 
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) { 
            $profpic = base_url().'/assets/images/'.$this->upload->data('file_name');

            $this->M_User->editProfpic($profpic, $this->session->userdata("username"));
            redirect("C_EditProfile", 'refresh');
        }else { 
            $error['error'] = $this->upload->display_errors();
            echo $error['error'];
        }

       
    }

    public function editProfile() { 

        $name = $this->input->post("name");
        $username = $this->input->post("username");
        $website = $this->input->post("website");
        $bio = $this->input->post("bio");
        $email = $this->input->post("email");
        $phonenumber = $this->input->post("phonenumber");
        $gender = $this->input->post("gender");


        $data = array (
            'name' => $name,
            'website' => $website,
            'bio' => $bio,
            'email' => $email,
            'phonenumber' => $phonenumber,
            'gender' => $gender,
            
        );

        $this->M_User->updateProfile((object) $data, $this->session->userdata("username"));

        if ($this->session->userdata("username") != $username) {
            $this->M_User->updateUsername($username, $this->session->userdata("username"));
            $this->session->set_userdata("username", $username); 

        }

        redirect('C_Profile');

    }

}
