<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
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
		<?php include('db.php'); ?>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					<div class="grid_12">
						<div class="map">
							<figure class=" ">
								
							</figure>
						</div>
					</div>
					<div class="grid_4">
						<h3>Address</h3>
						<div class="map">
							<address>
								<dl>
									<dt>The Company Name Inc. <br>
										8901 Marmora Road,<br>
										Glasgow, D04 89GR.
									</dt>
									<dd><span>Freephone:</span>+1 800 559 6580</dd>
									<dd><span>Telephone:</span>+1 800 603 6035</dd>
									<dd><span>FAX:</span>+1 800 889 9898</dd>
									<dd>E-mail: <a href="#" class="col1">mail@demolink.org</a></dd>
									<dd>Skype: <a href="#" class="col1">@skypename</a></dd>
								</dl>
							</address>
							<p>Every single <span class="col1"><a href="http://www.templatemonster.com/website-templates.php" rel="nofollow">premium design</a></span> from TemplateMonster goes with support services. The freebies go without support. </p>
							Need someone to help you with customization of the chosen free theme? <span class="col1"><a href="http://www.templatetuning.com/" rel="nofollow">Template Tuning</a></span>  team will help you. Note that it�s a paid service.
						</div>
					</div>
					<div class="grid_8">
						<h3>Contact Form</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							<label class="message">
								<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Send</a>
									<a href="#" data-type="reset" class="btn">Clear</a>
								</div>
							</div>
						</form>   
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>	
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">  
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Life in Color</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br>
							Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
						</div>  
					</div>
				</div>  
			</footer>
		</div>
	</body>
</html>




