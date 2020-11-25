<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                

                <!-- With Borders Section -->
                <div class="block-section">
				
				<table class="table table-bordered" id="sample_1">
				<thead>
<tr>
<th class="span1 text-center">NEWS #</th>
<th class="span1 text-center">HEADING</th>
<th class="span1 text-center">DESCRIPTION</th>
<th class="span1 text-center">DATE</th>
<th class="span1 text-center">&nbsp;</th>
<th class="span1 text-center">&nbsp;</th>
</tr>
</thead>

<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from news";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
?>

<tr>
<td class="span1 text-center"><?php echo $row['news_id'];?></td>
<td class="span1 text-center"><?php echo $row['heading'];?></td>
<td class="span1 text-center"><?php echo $row['descr'];?></td>
<td class="span1 text-center"><?php echo $row['date'];?></td>
<td class="span1 text-center"><a href="news_delete.php?a=<?php echo $row['news_id'];?>">DELETE</a></td>
<td class="span1 text-center"><a href="news_edit.php?a=<?php echo $row['news_id'];?>">EDIT</a></td>
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










