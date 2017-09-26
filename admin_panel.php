<?php
if(!$this->session->userdata('name'))
{
	redirect(base_url('index.php/adminlogin'));
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>
<div class='container'>
<h1>WELCOME TO ADMIN PANEL</h1>
<hr>
<nav class='collapse navbar-collapse nav navbar-nav'>
<ui ><a href="<?php echo base_url('index.php/adminpanel/showdataall');?>" class='btn btn-primary'>ALL POST</a><ui>
<ui ><a class='btn btn-primary'>ADD NEW POST</a></ui>
<ui ><a class='btn btn-primary'>HOME</a></ui>
<ui ><a href="<?php echo base_url('index.php/adminlogin/admin_logout');?>" class='btn btn-primary'>LOG OUT</a></ui>




</nav>


</head>

<body>
<br><br><hr><br><br>
<?php echo form_open('adminpanel/add_post');?>
<?php validation_errors();?>
<table class='table table-bordered'>

<th>NAME</th>
<th>TYPE</th>
<th>PRICE</th>
<th>COLOR</th>
<th>DESCRIPTION</th>

<tr><td><input type='text' name='name' ></td><td><input type='text' name='type' ></td><td><input type='text' name='price' ></td><td><input type='text' name='color' ></td><td><input type='textarea' name='description' height='100' width='100'></td></tr>
<tr><td class='text text-danger'><?php echo form_error('name');?></td><td class='text text-danger'><?php echo form_error('type');?></td><td class='text text-danger'><?php echo form_error('price');?></td><td class='text text-danger'><?php echo form_error('color');?></td><td class='text text-danger'><?php echo form_error('description');?></td></tr>
</table>

<?php
$attr = array('class'=>'btn btn-primary','name'=>'button','value'=>'ADD POST');
echo "<center>".form_submit($attr)."</center>";?>

</div>
</body>
</html>