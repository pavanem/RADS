<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                

                <!-- With Borders Section -->
                <div class="block-section">
				
				<div class="form-actions">
                               
                                <a href="expenses.php"><button type="submit" class="btn btn-success"><i class="icon-ok"></i> ADD NEW</button></a>
                            </div>

				
				
				
				<table class="table table-bordered" id="sample_1">
				<thead>
<tr>
<th class="span1 text-center">EXPENSE#</th>
<th class="span1 text-center">EVENT ID </th>
<th class="span1 text-center">AMOUNT</th>
<th class="span1 text-center">DATE</th>
<th class="span1 text-center">&nbsp;</th>
<th class="span1 text-center">&nbsp;</th>
</tr>
</thead>

<?php
$i=0;
$event_id=$_POST['event_id'];
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$sql="select * from expenses e, events v where e.event_id=v.event_id and e.event_id='$event_id'";
$query="select * from expenses e, events v where e.event_id=v.event_id";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>

<tr>
<td class="span1 text-center"><?php echo $i;?></td>
<td class="span1 text-center"><?php echo $row['event_name'];?></td>
<td class="span1 text-center"><?php echo $row['amt'];?></td>
<td class="span1 text-center"><?php echo $row['date'];?></td>
<td class="span1 text-center"><a onClick="return confirm('Are u sure...?');" href="expenses_delete.php?a=<?php echo $row['exp_id'];?>title="Delete"><i class="icon-remove"></i></a></td>
<td class="span1 text-center"><a href="expenses_edit.php?a=<?php echo $row['exp_id'];?>title="Edit"><i class="icon-pencil"></i></a></td>
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












