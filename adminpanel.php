<?php
class Adminpanel extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->helper(array('form','url'));
$this->load->library('form_validation');
$this->load->model('admin_panel','admin');




}
public function index()
{

$this->load->view('admin_panel');



}
public function add_post()
{

$this->form_validation->set_rules('name','name','required');
$this->form_validation->set_rules('type','Type','required|alpha');
$this->form_validation->set_rules('price','Price','required|numeric');
$this->form_validation->set_rules('color','Color','required|alpha');
$this->form_validation->set_rules('description','Description','required');
if($this->form_validation->run()==true)
{

$name=$this->input->post('name');
$type=$this->input->post('type');
$price=$this->input->post('price');
$color=$this->input->post('color');
$description=$this->input->post('description');
$this->load->model('admin_panel');
$query=$this->admin_panel->add_data($name,$type,$price,$color,$description);
if($query==true)
{

echo "<script>alert('YOUR RECORD SUCCESSFULLY ENTERED');</script>";
	$this->load->view('admin_panel');

}
else
{
	echo "Fails to enter data";
}


}
else
{

	$this->load->view('admin_panel');
}


}
public function showdataall()
{

$this->load->model('admin_panel');
$query['result']=$this->admin_panel->showrecords();
if($query['result'])
{
	
$this->load->view('showall',$query);


}


}
public function delete()
{
if($this->input->get('delete')!='')
{
$ans=$this->input->get('delete');
$del=$this->admin->delete_data($ans);
if($del)
{
	$query['result']=$this->admin->showrecords();
	$this->load->view('showall',$query);
}

}



}





}
















?>