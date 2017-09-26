<?php
class admin_login extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->helper(array('form','url','html'));
$this->load->library('session');







}
public function index()
{
	
$this->load->view('admin');
}
public function login()
{

$username = $this->input->post('username');
$password =$this->input->post('password');

$this->load->model('admin_model','admin');
$result=$this->admin->login_data($username,$password);
if($result)
{
	
	$this->session->set_userdata('username',$username);
redirect(base_url('index.php/shopping/purchase/'));


}
else
{
echo "<script>alert('username and password are incorrect or does not match');</script>";
$this->load->view('admin');
	


}
}
public function logout()
{

	$this->session->unset_userdata('username');
	redirect('admin_login');
}

}














?>