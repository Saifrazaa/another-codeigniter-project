<?php
class signupmodel extends CI_Model
{
public function __construct()
{

parent::__construct();







}

public function signupmod($username,$password,$email,$mobile,$country,$age)
{
$query=$this->db->insert('signup',['username'=>$username,'password'=>$password,'email'=>$email,'mobile'=>$mobile,'country'=>$country,'age'=>$age]);
return $query;


}




}




?>