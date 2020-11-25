<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                

                <!-- With Borders Section -->
                <div class="block-section">
				
				

				
				
				
				<table class="table table-bordered">
				<thead>
<tr>
<th class="span1 text-center">EXPENSE#</th>
<th class="span1 text-center">Donor </th>
<th class="span1 text-center">AMOUNT</th>
<th class="span1 text-center">DATE</th>

</tr>
</thead>

<?php
$i=0;
$total=0;
$user_id=$_POST['user_id'];
$sdate=$_REQUEST['sdate'];
$edate=$_REQUEST['edate'];
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

 $sql="select * from donation d, user u where d.user_id=u.user_id and d.user_id='$user_id' and d.date>='$sdate' and d.date<='$edate'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
$amt=$row['amt'];
$total=$total+$amt;
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
<tr>
<td class="span1 text-center" colspan="2">Total</td>
<td class="span1 text-center"><?php echo $total;?></td>
<td class="span1 text-center" ></td>
</tr>
</table>
				
				
				
				
                </div>
                <!-- END With Borders Section -->
                <!-- END With Borders Style -->
            </div>
            <!-- END Page Content -->
			
	
	
	  <script src="../Donor/js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="../Donor/js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="../Donor/js/DT_bootstrap.js"></script>
   <script src="../Donor/js/dynamic-table.js"></script>
<?php include('footer.php');   ?>












