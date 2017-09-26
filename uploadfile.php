<!DOCTYPE html>
<html>
<head>
	<title>Uploads</title>
</head>
<body>
<?php echo $error;?>
<?php 
	$this->benchmark->mark('start_data');

echo form_open_multipart(base_url('index.php/uploadfile/upload'));?>
<input type='file' name='picture' value='upload image'>
<?php echo form_submit('submit','submit');?>
<?php echo form_close();?>
<?php $this->benchmark->mark('end_data'); ?>

<?php echo $this->benchmark->elapsed_time('start_code','end_start');?>
</body>
</html>