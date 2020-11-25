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
                        <h4>Add Expenses</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="expenses_ins.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                           
                            <div class="control-group">
                                <label class="control-label" for="general-text">Event ID</label>
                                <div class="controls">
								<select name="event_id" id="event_id">
<option>select</option>
  
  <?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from events";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
?>

<option value="<?php echo $row['event_id'];?>" selected><?php echo $row['event_id'];?>/<?php echo $row['event_name'];?></option>
  
<?php
}
?>  
                  </select>
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Amount</label>
                                <div class="controls">
                                    <input name="amt" type="text" id="amt" class="validate[required],custom[onlyNumber]">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Date</label>
                                <div class="controls">
                                    <input name="date" type="date" id="date" class="validate[required],custom[date]">
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





























