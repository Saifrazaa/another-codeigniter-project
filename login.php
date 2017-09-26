<?php

class Login extends CI_Model
{

public function login_data($data)
{
 $this->db->insert('newbd2',$data);
 return "successfully sign up";

}



}



?>