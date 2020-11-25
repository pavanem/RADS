<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
               
<h4 class="page-header">Donation</h4>
                <!-- With Borders Section -->
                <div class="block-section">
				
				
				<table class="table table-bordered" id="sample_1">
				<thead>
<tr>
<th class="span1 text-center">DONATION</th>
<th class="span1 text-center">USER  </th>
<th class="span1 text-center">AMOUNT</th>
<th class="span1 text-center">DATE</th>

</tr>
</thead>

<?php
$i=0;
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from donation d, user u where d.user_id=u.user_id and u.email='$uname'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>

<tr>
<td class="span1 text-center"><?php echo $i;?></td>
<td class="span1 text-center"><?php echo $row['fname'];?></td>
<td class="span1 text-center"><?php echo $row['amt'];?></td>
<td class="span1 text-center"><?php echo $row['date'];?></td>

</tr>

<?php
}
?>
</table>
				
				
				
				
				
				
                    
                </div>
                <!-- END With Borders Section -->
                <!-- END With Borders Style -->
            </div>
            <!-- END Page Content -->
			

	
		
	  <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');   ?>









