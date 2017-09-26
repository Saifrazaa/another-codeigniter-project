<!DOCTYPE html>
<html>
<head>
	<title>Shop Online</title>
	<link   rel="stylesheet"         href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<script type="text/javascript"   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"     ></script>
<img src="logo.png" />
</head>
<body>

</br>
<h1 style="text-align: center;color:blue;background-color: yellow">ITEMS    LIST</h1>
<br>
<hr>

<section>
<td>
<article style='float:left;height: 1100px;width:250px;background-color: yellow'>
	

	<ui style='color:blue;font-size: 40px'><u>DASHBOARD</u></ui><br><br>
	<ui style='color:blue;font-size: 40px'><u>SIGN UP</u></ui><br><br>
	<ui style='color:blue;font-size: 40px'><u>LOG IN</u></ui><br><br>
	<ui style='color:blue;font-size: 40px'><u>FOLLW US</u></ui><br><br>
<ui style='color:blue;font-size: 40px'><u>CONTACT US</u></ui><br><br>
	<ui style='color:blue;font-size: 40px'><u>ADDRESS</u></ui><br><br>

</article>

<?php foreach($results as $row) {?>
<article valign='center' style='float:left;border: 10px solid grey;margin-top:50px;height: 350px;width:350px;margin-left: 100px' >
<br><br>
<b style='margin-left: 20px;color:red;font-size: 25px'><i>NAME =<?php echo  $row->name;?>;</i></b><br>
<b style='margin-left: 20px;color:red;font-size: 20px'><i>TYPE =<?php echo   $row->type;?>;</i></b><br>
<b style='margin-left: 20px;color:red;font-size: 20px'><i>PRICE =<?php echo  $row->price;?>;</i></b><br>
<b style='margin-left: 20px;color:red;font-size: 20px'><i>COLOR =<?php echo $row->color;?><;/i></b><br>
<b style='margin-left: 20px;color:red;margin-top: 100px;font-size: 10px'><i>DESCRIPTION  =<?php echo $row->description;?>;</i></b><br>
<br>
<center><a href="<?php echo base_url('index.php/shopping/purchase')?>" class='btn btn-primary'>PURCHASE<span class='glyphicon glyphicon-shopping-cart'></span></a></center>

</article>
<?php };?>
</td>
</section>
<div class='container' >




</div>
<br>
<br>
<center><?php echo $this->pagination->create_links();?></center>
</body>

<?php echo include('footer.php');?>
</html>