<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                

                <!-- With Borders Section -->
                <div class="block-section">
				
				
				
				
				
				<table class="table table-bordered" >
				<thead>
<tr>
<th class="span1 text-center">EXPENSE#</th>
<th class="span1 text-center">EVENT ID </th>
<th class="span1 text-center">AMOUNT</th>
<th class="span1 text-center">DATE</th>

</tr>
</thead>

<?php
$i=0;
$total=0;
$event_id=$_POST['event_id'];
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$sql="select * from expenses e, events v where e.event_id=v.event_id and e.event_id='$event_id'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
$amt=$row['amt'];
$total=$total+$amt;
?>

<tr>
<td class="span1 text-center"><?php echo $i;?></td>
<td class="span1 text-center"><?php echo $row['event_name'];?></td>
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












