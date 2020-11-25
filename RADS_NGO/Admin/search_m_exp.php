<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Search Details</h4>
                    </div>
                    <!-- END General Forms Title -->
                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="search_exp11.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                        
                            <div class="control-group">
                                <label class="control-label" for="general-text">Event Details</label>
                                <div class="controls">
								<select name="event_id" id="event_id">
  <option>select</option>
  <?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from events";
$res=mysql_query($query);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['event_id'];?>"><?php echo $row1['event_id'];?>/<?php echo $row1['event_name'];?></option>
  
<?php
}
?>  
  </select>
           
		   


                                  
                                </div>
                            </div>
                          
                            	
							
							   <div class="control-group">
                                <label class="control-label" for="general-placeholder">Start Date</label>
                                <div class="controls">
                                    <input name="sdate" type="date" id="sdate"  id="general-text" >
                                </div>
                            </div>
							
							 <div class="control-group">
                                <label class="control-label" for="general-placeholder">End Date</label>
                                <div class="controls">
                                    <input name="edate" type="date" id="edate"  id="general-text" >
                                </div>
                            </div>
							
                            
                           
                            <div class="form-actions">
                                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> Reset</button>
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit</button>
                            </div>
                            <!-- END Form Buttons -->
						</form>
						
												<form action="search_exp12.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                        
                            <div class="control-group">
                                <label class="control-label" for="general-text">Donation Details</label>
                                <div class="controls">
								<select name="user_id" id="user_id">
  <option>select</option>
  <?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from user";
$res=mysql_query($query);
while($row2=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row2['user_id'];?>"><?php echo $row2['fname'];?></option>
  
<?php
}
?>  
  </select>
                 		                           

                  
                                  
                                </div>
                            </div>
                          
						   <div class="control-group">
                                <label class="control-label" for="general-placeholder">Start Date</label>
                                <div class="controls">
                                    <input name="sdate" type="date" id="sdate"  id="general-text" >
                                </div>
                            </div>
							
							 <div class="control-group">
                                <label class="control-label" for="general-placeholder">End Date</label>
                                <div class="controls">
                                    <input name="edate" type="date" id="edate"  id="general-text" >
                                </div>
                            </div>
                            	
							
							
							
                            
                           
                            <div class="form-actions">
                                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> Reset</button>
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit</button>
                            </div>
                            <!-- END Form Buttons -->
						</form>
                    </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<?php include('footer.php');   ?>

