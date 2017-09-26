<?php

class admin_model extends CI_Model
{
public function __construct()
{

parent::__construct();

}

public function login_data($username,$password)
{
$query=$this->db->select()
         ->where(['username'=>$username,'password'=>$password])
         ->get('signup');
return $query->result();

}
public function admin_login($name,$password)

{
$q=$this->db->select()
            ->where(['name'=>$name,'password'=>$password])
            ->get('admin_check');
 return $q->result();
}


}







?>