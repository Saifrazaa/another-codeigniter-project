<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
</head>
<body style="background-color: wheat">
<center>


<center><h1>PLEASE LOG IN TO CONTINUE</h1></center>
<?php

$this->load->helper(array('html','url','form'));
echo form_open('login');
echo form_label('NAME','username');
echo "</br>";
echo form_input('username','');
echo "</br>";

echo form_label('PASSWORD','password');
echo "</br>";

echo form_password('password');
echo "</br>";
echo "</br>";

echo form_submit('submit','submit');
echo form_close();








?>
</center>
</body>
<br></br><br><br><br>
</html>