<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                
                <h4 class="page-header">Events</h4>

                <!-- With Borders Section -->
                <div class="block-section">
				
				<div class="form-actions">
                               
                                <a href="events.php"><button type="submit" class="btn btn-success"><i class="icon-ok"></i> ADD NEW</button></a>
                            </div>
                <div class="block-section">
				
				<form name="f1" method="post" action="events_delete1.php">
				<table class="table table-bordered" id="sample_1">
				<thead>
<tr>
<th class="span1 text-center">--</th>
<th class="span1 text-center">#</th>
<th class="span1 text-center">EVENT NAME </th>
<th class="span1 text-center">LOCATION</th>
<th class="span1 text-center">DESCRIPTION</th>
<th class="span1 text-center">DATE</th>
<th class="span1 text-center">STATUS</th>
<th class="span1 text-center">&nbsp;</th>
<th class="span1 text-center">&nbsp;</th>
</tr>
</thead>
<tbody>

<?php
$i=0;
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from events";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>

<tr>
<td class="span1 text-center"><input name="id[]" type="checkbox" value="<?php echo $row['event_id']; ?>"></td>
<td class="span1 text-center"> <?php echo $i;?></td>
<td class="span1 text-center"> <?php echo $row['event_name'];?></td>
<td class="span1 text-center"> <?php echo $row['location'];?></td>
<td class="span1 text-center"> <?php echo $row['descr'];?></td>
<td class="span1 text-center"> <?php echo $row['e_date'];?></td>
<td class="span1 text-center"> <?php echo $row['status'];?></td>

<td class="span1 text-center"> <a onClick="return confirm('Are u sure...?');" href="events_delete.php?a=<?php echo $row['event_id'];?>title="Delete"><i class="icon-remove"></i></a></td>
<td class="span1 text-center"> <a href="events_edit.php?a=<?php echo $row['event_id'];?>title="Edit"><i class="icon-pencil"></i></a></td>
</tr>

<?php
}
?>
</tbody>
</table>
<p>
<input type="submit" name="Submit" value="Multiple Delete">
</p>
				</form>
				
                  
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






