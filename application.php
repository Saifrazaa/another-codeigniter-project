<?php
class Application extends CI_Controller
{
public function index()
{
   
parent::__construct();
$this->load->library('table');
if($this->load->library('table'))
{


	echo "successfully load";
}
else
{

echo "fail to load";

}

}
public function show_data()
{

$this->load->model('appdata');
$answer=$this->appdata->fetch_data();
echo "<table style='width:500px;border:10px solid black;'>";
echo "<th>NAME</th><th>PASSWORD</th><th>EDIT</th>";

  
foreach($answer as $row)
{
	

echo " <tr ><td>$row->username</td><td>$row->password</td><td ><a href='localhost/ci/index.php/appdata/check' >Edit</a></td></tr>";



}
echo "</table>";
}

public function fetch()
{

//foreach($query as $row)
	$this->load->model(appdata);
	$this->appdata->check();
$this->load->helper(array('html','url','form'));




 




echo form_label('NAME','username');
echo form_input('username'/*,$row->username)*/);
echo "</br>"; 
echo form_label('PASSWORD','password');
echo form_input('password'/*,$row->password*/);
echo "<br>";
echo form_submit('submit','UPLOAD');
echo form_close();

echo "</center>";



}

}





?>