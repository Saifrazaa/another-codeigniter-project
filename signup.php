<html>
<head>
<title>SIGN UP</title>
<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>

</head>
<body>
	<div class="container" >
	<br>
	<br>
	<h1 class='text text-striped' style='font-family:arial;text-align: center;background-color: yellow'>PLEASE SIGN UP TO GET STARTED</h1>
	<br>
	<?php   validation_errors();?>
	

	<hr>
	<?php
	echo form_open_multipart('signup/signup');
	?>
	<table class='table table-bordered'>
    <?php echo "<b style='text-align:center' class='text text-danger'>" .$error."</b>";?>
     <br><center>PLEASE UPLOAD PROFILE PICTURE<input type='file' name='picture'  ></center>
    <tr><td>NAME</td><td><input type='text' name='username' value="<?php echo set_value('username') ?>" placeholder='username' /></td><td class='text text-danger'><?php echo form_error('username');?></td></tr>
    <br>
    <tr><td>PASSWORD</td><td><input type='password' name='password'  placeholder='password'></td><td class='text text-danger'><?php echo form_error('password');?>
</td></tr>

    <tr><td>EMAIL</td><td><input type='text' name='email' value="<?php echo set_value('email');?>" placeholder='email'></td><td class='text text-danger'>        <?php echo form_error('email');?>
</td></tr>
    <tr><td>MOBILE</td><td><input type='text' name='mobile' value="<?php echo set_value('mobile');?>" placeholder='mobile'></td><td class='text text-danger'>        <?php echo form_error('mobile');?>
</td></tr>
    <tr><td>COUNTRY</td><td><input type='text' name='country' value="<?php echo set_value('country');?>" placeholder='country'></td><td class='text text-danger'>        <?php echo form_error('country');?>
</td></tr>
    <tr><td>AGE</td><td><input type='text' name='age' value="<?php echo set_value('age');?>" placeholder='age'></td><td class='text text-danger'>        <?php echo form_error('age');?>
</td></tr>
    </table>
    <center><script src='https://www.google.com/recaptcha/api.js' async defer></script>
<div class="g-recaptcha" data-sitekey="6LetaRsUAAAAADM57PaSbo_mZttP9VKlyprsd8V-"></div>

<div class='g-recaptcha' /> </center>
<br>
    <?php 
    echo " <i class='text text-danger'>".form_error('check')."</i>";
        echo "<center><input type='checkbox' name='check'  />Are you agree to the <i style='color:red'>terms and conditions<i></center><br>";

    $name= array(
     'name'=>'submit',
     'class'=>'btn btn-primary',
     'value'=>'SIGN UP',
     



    	);
    echo "<center>";
   echo form_submit($name);
echo "</center>";
echo form_close();
	?>
   

	</div>



</body>
</html>