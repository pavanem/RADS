


<!DOCTYPE html>
<html lang="en">
	<head>
				<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script> 
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			}) 
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	    <style type="text/css">
<!--
.style4 {font-size: large; font-weight: bold; color: #FF0000; }
-->
        </style>
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<?php include('header.php'); ?>
		<?php include('val.php'); ?>
		<?php include('db.php'); ?>
		
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						<div class="map">
							<figure class=" ">
								
							</figure>
						</div>
					</div>
					<div class="grid_4">
						
						<div class="map">
							
							
						</div>
					</div>
				  <div class="grid_8">
					
						<h3 align="center"><strong>Events</strong></h3>
						      
					    <form action="" method="post" name="form1">
					      
						      <span class="style4"> Completed Events:</span><br>
						      <br>
							     <?php 
							$sql1="select * from events where status='completed'";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
							<p align="justify" style="font-size:16px "><strong> <?php echo $row4['event_name'];?></strong>,<?php echo $row4['location']; ?>:-<br> <?php echo $row4['descr'];  ?></p>
							<?php
							}
							?>
							  <br> <br>
							  
							  
							   <span class="style4"> Ongoing Events:</span><br>
							   <br>
							   <?php 
							$sql1="select * from events where status='ongoing'";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
							<p align="justify" style="font-size:16px "><strong> <?php echo $row4['event_name'];?></strong>,<?php echo $row4['location']; ?>:-<br> <?php echo $row4['descr'];  ?></p>
							<?php
							}
							?>
							  <br> <br>
							  
							  
							 <span class="style4"> Future Events:</span><br>
							 <br>
							   <?php 
							$sql1="select * from events where status='future'";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
							<p align="justify" style="font-size:16px "><strong> <?php echo $row4['event_name'];?></strong>,<?php echo $row4['location']; ?>:-<br> <?php echo $row4['descr'];  ?></p>
							<?php
							}
							?>
							  <br> <br>  
							  
							  
							  
							  
							  
			        </form>
				  </div>
				</div>
			</div>
<!--==============================footer=================================-->
<?php include('footer.php'); ?>
