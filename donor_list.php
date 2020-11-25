


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
.style2 {
	font-size: large;
	font-weight: bold;
}
.style3 {font-size: large}
-->
        </style>
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<?php include('header.php'); ?>
		<?php include('val.php'); ?>
		
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
					
						<h3 align="center"><strong>Donor's List	</strong></h3>
						      
					    <form method="post" name="form1">
						<table border="1" align="center">
				<thead>
<tr>

<th align="left" width="200" class="span1 text-center">Serial No.</th>
<th align="left" width="200" class="span1 text-center">USER ID </th>
<th align="left" width="200" class="span1 text-center">AMOUNT</th>
<th align="left" width="200" class="span1 text-center">DATE</th>

</tr>
</thead>

<?php
$i=0;
include('db.php'); 

$query="select * from donation d, user u where d.user_id=u.user_id";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>

<tr>

<td width="300"><?php echo $i;?></td>
<td class="span1 text-center"><?php echo $row['fname'];?></td>
<td class="span1 text-center"><?php echo $row['amt'];?></td>
<td class="span1 text-center"><?php echo $row['date'];?></td>

</tr>

<?php
}
?>
</table>

						
						
							
							
							
							
										    
					    </form>
				  </div>
				</div>
			</div>
<!--==============================footer=================================-->
<?php include('footer.php'); ?>
