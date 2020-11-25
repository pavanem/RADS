<div class="grid_4 prefix_1">
<?php include('db.php');  ?>
						<a href="donate.php" class="donate">Donate</a>
						<h4>Events</h4>
						<ul class="list">
							<li><a href="events.php">Completed Events </a></li>
							<li><a href="events.php">Ongoing Events</a></li>
							<li><a href="events.php">Future Events</a></li>
							
						</ul>
						<h4 class="head1">News</h4>
<marquee height="300" scrollamount="4" direction="up" bgcolor="#FFF4F4">
						<?php 
							$sql1="select * from news";
							$res1=mysql_query($sql1);
							while($row4=mysql_fetch_array($res1))
							{
							?>
						
						<div class="block3">
							<time datetime='2013-01-01'><span>RADS</span></time>
							<div class="extra_wrapper">
							<p class="col1"><a href="news.php"><?php echo $row4['heading'];  ?></a></p><?php echo $row4['date'];  ?> 
							
							</div>
						</div>
						
						
						<?php
						}
						?>
						
						</marquee>
						<br><br><br><br>
						<a href="donor_list.php" class="donate">Donor's List</a>
						
						
						