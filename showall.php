<?php 
if(!$this->session->userdata('name'))
{
	redirect(base_url('index.php/adminlogin'));
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>ALL RECORDS</title>
	<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>

</head>
<center>
<body>
<div class='container'>
<hr>
<br>

<nav class='collapse navbar-collapse nav navbar-nav'>
<ui ><a href="<?php echo base_url('index.php/adminpanel/showdataall');?>" class='btn btn-primary'>ALL POST</a><ui>
<ui ><a href="<?php echo base_url('index.php/adminpanel');?>" class='btn btn-primary'>ADD NEW POST</a></ui>
<ui ><a class='btn btn-primary'>HOME</a></ui>
<ui ><a  href="<?php echo base_url('index.php/adminlogin/admin_logout');?>" class='btn btn-primary'>LOG OUT</a></ui>
</nav>

<br>
<br>
<hr>
<?php echo form_open('adminpanel/delete'); ?>
<h1>ALL RECORDS ARE HERE</h1>
<hr>
<table class="table table-bordered table-hover table-striped" >
<tr>
<th>ID</th>
<th>NAME</th>
<th>TYPE</th>
<th>PRICE</th>
<th>COLOR</th>
<th>DESCRIPTION</th>
<th>DELETE POST</th>

<?php 

$i=19;
foreach($result as $row)


{







echo "</tr>";
echo "<tr>";
echo "<td>".$row->id."</td>";
echo "<td>".$row->name."</td>";
echo "<td>".$row->type."</td>";
echo "<td>".$row->price."</td>";
echo "<td>".$row->color."</td>";
echo "<td>". $row->description."</td>";
echo "<td><a href='delete?delete=".$row->id."' name='delete' class='btn btn-danger ' >Delete Post    <span class='glyphicon glyphicon-remove'></span></a></td>";
echo "</tr>";
$i++;
}
?>
</table>
<?php echo form_close();?>
</div>
</body>
</center>
<br><br><br><br><br><br><br><br>
</html>