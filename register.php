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
		<?php include('header.php'); ?>
		<?php include('val.php'); ?>
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
						
						
					</div>
				  <div class="grid_8">
						<h3 align="center"><strong>Registration Form</strong></h3>
						
				        <form name="formID" id="formID" method="post" action="register_insert.php">
		                  
						    <p align="justify">&nbsp;<label>First Name: &nbsp;&nbsp;
                            <input name="fname" type="text" id="fname" class="validate[required],custom[onlyLetter]">
						    </label>
					      </p>
						    <p align="justify">
						      <label>
						      <label>Middle Name: </label>   <input name="mname" type="text" id="mname" class="custom[onlyLetter]">
	                          </label>
                            </p>
						    <div align="justify">
						                  <label>Last Name: &nbsp;&nbsp;&nbsp;
						                  <input name="lname" type="text" id="lname" class="validate[required],custom[onlyLetter]">
						                  </label>
							              
                          </div>
			                <p align="justify">&nbsp;</p>
				          <p align="justify">
					          <label>Gender: &nbsp;&nbsp;&nbsp;&nbsp;
					          <input name="gender" type="radio" value="m" class="validate[required]">
					          Male <br>
					         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <input name="gender" type="radio" value="f" class="validate[required]">Female
					          </label>
						  </p>
					        <p align="justify">
					          <label>Date Of Birth: 
					          <input name="dob" type="date" id="dob" class="validate[required],custom[date]">
					          </label>					
					      </p>
					        <p align="justify">
					          <label>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					          <textarea name="address" cols="25" rows="6" id="address" class="validate[required]"></textarea>
					          </label>					
						  </p>
					        
					        <p align="justify">
					          <label>City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					          <input name="city" type="text" id="city" class="validate[required],custom[onlyLetter]">
</label>   
</p>
					        <p align="justify">
					          <label>Mobile: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					          <input name="mobile" type="text" id="mobile" class="validate[required],custom[mobile]">
					          </label>    
						  </p>
					        <p align="justify">
					          <label>Email Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					          <input name="email" type="text" id="email" class="validate[required],custom[email]">
					          </label>							
						  </p>
					        <p align="justify">
					          <label>Password: &nbsp;&nbsp;
					          <input name="password" type="password" id="password" class="validate[required]">
					          </label>						
						  </p>
					     
					        <p align="justify">&nbsp;			
	                      </p>
					    
				            <p>
				              <input type="submit" name="Submit" value="Submit"> 
				              <input type="reset" name="Reset" value="Reset">
			              </p>
				        </form>
			        <p>&nbsp;</p>
				  </div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include('footer.php'); ?>

