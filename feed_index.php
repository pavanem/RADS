


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
					
						<h3 align="center"><strong>Feedback</strong></h3>
						      
					    <form name="form1" method="post" action="feed_ins.php">
			            
					      <p>&nbsp;<label>Name: &nbsp; &nbsp;
				            <input name="feed_name" type="text" id="feed_name" required>
					      </label>
					      </p>
					      <label>Message:
					      <textarea name="descr" cols="40" rows="20" id="descr" required></textarea>
					      :</label>
						  
					      <p>&nbsp;</p>
					      
					      <p align="center">
					        <input type="submit" name="Submit" value="Submit">
					        <input type="reset" name="Reset" value="Reset">
					      </p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
						  
						  
<marquee height="400" scrollamount="4" direction="up" bgcolor="#F9F9F9">
						<?php 
							$sql1="select * from feedback";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
						
						<div class="block3">
							<time datetime='2013-01-01'><span>RADS</span></time>
							<div class="extra_wrapper">
							<p class="col1"><a href="news.php"><?php echo $row4['feed_name'];  ?></a></p><?php echo $row4['descr'];  ?> 
							
							</div>
						</div>
						
						
						<?php
						}
						?>
						
						</marquee>
						  
					    </form>
				  </div>
				</div>
			</div>
<!--==============================footer=================================-->
<?php include('footer.php'); ?>
