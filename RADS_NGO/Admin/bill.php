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
                        <h4>Billing</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="bill_insert.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                        
                            <div class="control-group">
                                <label class="control-label" for="general-text">Donor Name</label>
                                <div class="controls">
								<select name="user_id" id="user_id">
  <option>select</option>
  <?php
include('db.php');

$query="select * from user";
$res=mysql_query($query);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['user_id'];?>"><?php echo $row1['user_id'];?>.<?php echo $row1['fname'];?></option>
  
<?php
}
?>  
  </select>
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Amount</label>
                                <div class="controls">
								<select name="amt" id="amt">
  <option>select</option>
  <?php
include('db.php');

$query="select * from donation";
$res=mysql_query($query);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['amt'];?>"><?php echo $row1['amt'];?></option>
  
<?php
}
?>  
  </select>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-password">Address</label>
                                <div class="controls">
                                   <select name="address" id="address">
  <option>select</option>
  <?php
include('db.php');

$query="select * from user";
$res=mysql_query($query);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['address'];?>"><?php echo $row1['address'];?></option>
  
<?php
}
?>  
  </select>
                                </div>
                            </div>
							
							 <div class="control-group">
                                <label class="control-label" for="general-text">Mobile</label>
                                <div class="controls">
<select name="mobile" id="mobile">
  <option>select</option>
  <?php
include('db.php');

$query="select * from user";
$res=mysql_query($query);
while($row1=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row1['mobile'];?>"><?php echo $row1['mobile'];?></option>
  
<?php
}
?>  
  </select>                                   
                                  
                                </div>
                            </div>
							
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Date</label>
                                <div class="controls">
                                    <input name="date" type="date" id="date" id="general-text" class="validate[required],custom[date]">
                                </div>
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





















