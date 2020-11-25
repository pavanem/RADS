
<?php include('meta.php');  ?>

	
	
	<body class="page1" id="top">
<!--==============================header=================================-->
<?php include('header.php');  ?>

		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					
	<?php include('slider.php'); ?>				
					<?php include('db.php');  ?>
					
					<div class="clear"></div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Completed Events</div>
							<div class="pad">
							
							<marquee scrollamount="3" direction="up" onMouseOver="stop()" onMouseOut="start()" height="220">
							<?php 
							$sql1="select * from events where status='Completed'";
							$res1=mysql_query($sql1);
							while($row1=mysql_fetch_array($res1))
							{
							?>
							<p style="font-size:16px "> <?php echo $row1['event_name'];  ?> </p> 

							<?php
							 } ?>	
							</marquee>	

								
								
								<div class="alright"><a href="events.php" class="btn">Read More</a></div>
							</div>
							
						</div>
						
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Ongoing Events</div>
							<div class="pad">
							<marquee scrollamount="3" direction="up" onMouseOver="stop()" onMouseOut="start()" height="220">
							
							
								<?php 
							$sql2="select * from events where status='Ongoing'";
							$res2=mysql_query($sql2);
							while($row2=mysql_fetch_array($res2))
							{
							?>
							<p style="font-size:16px "> <?php echo $row2['event_name'];  ?> </p> 

							<?php
							 } ?>	
							</marquee>	
							</div>
							<div class="alright"><a href="events.php" class="btn">Read More</a></div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Future Events</div>
							<div class="pad">
								<marquee scrollamount="3" direction="up" onMouseOver="stop()" onMouseOut="start()" height="220">
							
							
								<?php 
							$sql3="select * from events where status='Future'";
							$res3=mysql_query($sql3);
							while($row3=mysql_fetch_array($res3))
							{
							?>
							<p style="font-size:16px "> <?php echo $row3['event_name'];  ?> </p> 

							<?php
							 }
							?>	
							</marquee> 
							</div>
							<div class="alright"><a href="events.php" class="btn">Read More</a></div>	
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">News</div>
							
							<div class="pad">
							<marquee scrollamount="3" direction="up" onMouseOver="stop()" onMouseOut="start()" height="220">
							<?php 
							$sql1="select * from news";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
							<p style="font-size:16px "> <?php echo $row4['heading'];  ?> </p> 
							<?php
							}
							?>
							</marquee>
							
							
						</div>
						<div class="alright"><a href="news.php" class="btn">Read More</a></div></div>
					</div>
					
					<div class="grid_12">
						<h3>About RADS</h3>
						<img src="images/page1_img8.jpg" alt="" class="img_inner fleft">
					  <div class="extra_wrapper">
							<p>RADS is a non-profit NGO based in Khanagaon(Gokak). Since 1996 the organization is involved in various developmental activitiesIt is registered under <strong>Karnataka State Societies Regn Act.No.17 and Ministry of Home Affairs(FCRA).</strong> .</p>
						  <strong>Mr. I G Patil</strong> is the Project Director of RADS NGO, Dharwad. The projects are supported by State and Central govt. Organization is exempted from IT under <strong>12A and 80G  </strong> </div>
						<div class="clear"></div>
						<div class="alright"><a href="about_us.php" class="btn">Read More</a></div>
					</div>
					
					<div class="clear"></div>
					<div class="grid_12">
						<h2>PHOTO GALLERY</h2>
						<div id="owl">
							 <?php 
							$sql1="select * from gallery";
							$res1=mysql_query($sql1);
							while($row1=mysql_fetch_array($res1))
							{
							?>
							<div class="item">
								<a href="../RADS/slider-master/image-gallery-with-vertical-thumbnail.php"><img src="RADS_NGO/Admin/upload_img/<?php echo $row1['image']; ?>" alt=""><?php echo $row1['title']; ?></a>
							</div>
							
							  <?php
							 } ?>
							
						</div>
					</div>

					
				</div>
			</div>
			
			
<!--==============================footer=================================-->
			
			
	<?php include('footer.php');  ?>		