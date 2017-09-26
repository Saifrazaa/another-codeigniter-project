<?php
class shopping extends CI_Controller
{
public function __construct()
{

parent::__construct();
$this->load->model('application_model','app');
$this->load->helper('url');
$this->load->library('table');
$this->load->library('pagination');
$this->load->library('cart');
}
public function index($offset=0)
{



$this->load->view('header');

//pagination start
$config['base_url']=base_url('index.php/shopping/index');
$config['per_page']=9;
$config['total_rows']=$this->app->totalrows();
$config['full_tag_open']="<ul class='pagination'>";
$config['full_tag_close']="</ul>";
$config['first_link']="First";
$congfig['last_link']="Last";
$config['first_tag_open']="<li>";
$config['first_tag_close']="</li>";
$config['last_tag_open']="<li>";
$config['last_tag_close']="</li>";
$config['next_tag_open']="<li>";
$config['next_tag_close']="</li>";
$config['prev_tag_open']="<li>";
$config['prev_tag_close']="</li>";
$config['cur_tag_open']="<li class='active'> <a>";
$config['cur_tag_close']="</a></li>";
$config['num_tag_open']="<li>";
$config['num_tag_close']="</li>";

$this->pagination->initialize($config);
 if($this->uri->segment(3))
 {
$page=$this->uri->segment(3);

 }
 else
 {
$page=0;

 }
 $data['results']=$this->app->fetch_data($config['per_page'],$this->uri->segment(3));
 
//$que['results']=$this->app->shopp_data();
$this->load->view('home',$data);



//$this->load->view('footer');


}
//products details
public function open_products()
{

$que['results']=$this->app->shopp_data();
if($que)
{
	$this->load->view('header');
		$this->load->view('application_views/products',$que);
     $this->load->view('footer');
   
}
else
{
	echo "fail";
}



}
public function purchase()
{
	if(!$this->session->userdata('username'))
	{
		redirect(base_url('index.php/admin_login'));
	}
	else
{
	
	$this->load->model('admin_model');
	echo $this->input->post('productname');
//$this->load->model('application_model','app');
//$this->app->add_products();


//$this->load->view('header');
//$this->load->view('dashboard');
//$this->load->view('footer');

}

}
public function logout()
{
	$this->session->unset_userdata('username');
	redirect(base_url('index.php/shopping'));
}


}



?>