
<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                 <h4 class="page-header">Users</h4>

                <!-- With Borders Section -->
                <div class="block-section">
				
				<div class="form-actions">
                               
                                <a href="user.php"><button type="submit" class="btn btn-success"><i class="icon-ok"></i> ADD NEW</button></a>
                            </div>
                <div class="block-section">
				<form name="f1" method="post" action="user_delete1.php">
<table class="table table-bordered" id="sample_1">
<thead>
<tr>
<th class="span1 text-center">--</th>
<th class="span1 text-center">User #</th>
<th class="span1 text-center">FIRST NAME </th>
<th class="span1 text-center">MIDDLE NAME </th>
<th class="span1 text-center">LAST NAME </th>
<th class="span1 text-center">GENDER</th>
<th class="span1 text-center">DATE OF BIRTH </th>
<th class="span1 text-center">ADDRESS</th>
<th class="span1 text-center">CITY</th>
<th class="span1 text-center">MOBILE</th>
<th class="span1 text-center">EMAIL</th>
<th class="span1 text-center">PASSWORD</th>
<th class="span1 text-center">--</th>

</tr>
</thead>
<tbody>
<?php
$i=0;
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from user";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>

<tr>
<td class="span1 text-center"><input name="id[]" type="checkbox" value="<?php echo $row['user_id']; ?>"></td>
<td class="span1 text-center"><?php echo $i;?></td>
<td class="span1 text-center"><?php echo $row['fname'];?></td>
<td class="span1 text-center"><?php echo $row['mname'];?></td>
<td class="span1 text-center"><?php echo $row['lname'];?></td>
<td class="span1 text-center"><?php echo $row['gender'];?></td>
<td class="span1 text-center"><?php echo $row['dob'];?></td>
<td class="span1 text-center"><?php echo $row['address'];?></td>
<td class="span1 text-center"><?php echo $row['city'];?></td>
<td class="span1 text-center"><?php echo $row['mobile'];?></td>
<td class="span1 text-center"><?php echo $row['email'];?></td>
<td class="span1 text-center"><?php echo $row['password'];?></td>
<td onClick="return confirm('Are u sure...?');" class="span1 text-center"><a href="user_delete.php?a=<?php echo $row['user_id'];?> title="Delete""><i class="icon-remove"></i></a></td>

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


