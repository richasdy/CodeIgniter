<?php

class M_user extends CI_model
{
    public function regis()
    {
        //use query builder to insert $data to table "user"
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->insert('user', $data);
    }

    public function login($uname, $pass)
    {
        //get data user based on uname aand password 
        $query = $this->db->query("SELECT * FROM user WHERE username = '" . $uname . "' AND password = '" . $pass . "'");
        return $query->result_array();
    }
}
