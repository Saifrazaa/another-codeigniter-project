<html>
<?php include('header.php');?>

<head>
<title>LOG IN TO YOUR ACCOUNT</title>
<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>

</head>
<body>
	<div class="container" >
	<br>
	<br>
	<h1 class='text text-striped'>PLEASE LOGIN TO YOUR ACCOUNT TO PURCHASE</h1>
	<br>
	<hr>
	<?php
	echo form_open('admin_login/login');
	echo "<table class='table table-bordered' cellpadding='6' cellspacing='6' rowspadding='6'>";
	echo "<br>";
    echo "<tr><td>NAME</td><td><input type='text' name='username'  placeholder='username'></td></tr>";
    echo "<tr><td>PASSWORD</td><td><input type='password' name='password' placeholder='password'></td></tr>";
    echo '</table>'; 
    $name= array(
     'name'=>'submit',
     'class'=>'btn btn-danger',
     'value'=>'LOG IN',
     



    	);
	
    echo "<center>";
    echo "<br><br>";
   echo form_submit($name);
?>
   Don't Have Account?<a href='<?php echo base_url('index.php/signup');?>' class='btn btn-primary'>SIGNUP</a>

<?php
echo "</center>";
echo form_close();


	?>
   

	</div>



</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>
</html>
