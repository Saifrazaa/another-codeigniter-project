<?php
class Logout extends CI_Controller
{
public function log_out()
{
	//user log out 
	$this->load->library('session');
$this->load->helper('url');
$this->session->unset_userdata($data);
redirect('login');




}





}







?>