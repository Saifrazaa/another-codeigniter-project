<html>


<head>
<title>ADMIN LOGIN</title>
<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>

</head>
<body>
	<div class="container" >
	<br>
	<br>
	<h1 class='text text-striped'>PLEASE LOGIN TO MAKE CHANGES IN YOUR WEBSITE</h1>
	<br>
	<hr>
	<?php
	echo form_open(base_url('index.php/adminlogin/admin_check'));
	echo "<table class='table table-bordered' cellpadding='6' cellspacing='6' rowspadding='6'>";
	echo "<br>";
    echo "<tr><td>NAME</td><td><input type='text' name='username' placeholder='username'></td><td class='text text-danger'>".form_error('username')."</td></tr>";
    echo "<tr><td>PASSWORD</td><td><input type='password' name='password' placeholder='password'></td><td class='text text-danger'>".form_error('password')."</td></tr>";
    echo '</table>'; 
    $name= array(
     'name'=>'submit',
     'class'=>'btn btn-danger',
     'value'=>'LOG IN',
     



    	);
	
    echo "<center>";
    echo "<br><br>";
   echo form_submit($name);

  

echo "</center>";
echo form_close();


	?>
   

	</div>



</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</html>
