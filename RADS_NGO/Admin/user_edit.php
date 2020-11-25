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
                        <h4>Edit User</h4>
                    </div>
                    <!-- END General Forms Title -->
<?php
$b=$_REQUEST['a'];

$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from user where user_id='$b'";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
?>                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="user_update.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                            <input name="user_id" type="hidden" id="user_id" value="<?php echo $row['user_id']; ?>">
                            <div class="control-group">
                                <label class="control-label" for="general-text">First Name</label>
                                <div class="controls">
								<input name="fname" type="text" id="fname" class="validate[required],custom[onlyLetter]" value="<?php echo $row['fname']; ?>">
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Middle Name</label>
                                <div class="controls">
                                    <input name="mname" type="text" id="mname" value="<?php echo $row['mname']; ?>" class="validate[required],custom[onlyLetter]">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Last Name</label>
                                <div class="controls">
                                    <input name="lname" type="text" id="lname" value="<?php echo $row['lname']; ?>" class="validate[required],custom[onlyLetter]"></td>
                                </div>
                            </div>
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Gender</label>
                                <div class="controls">
                                    <input name="gender" type="radio" value="m" class="validate[required]">
        M 
        <input name="gender" type="radio" value="f" class="validate[required]">
        F
                                </div>
                            </div>
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Date Of Birth</label>
                                <div class="controls">
                                    <input name="dob" type="date" id="dob" value="<?php echo $row['dob']; ?>" class="validate[required],custom[date]">
                                </div>
                            </div>
							
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Address</label>
                                <div class="controls">
                                    <textarea name="address" id="address" class="validate[required]"><?php echo $row['address']; ?></textarea>
                                </div>
                            </div>
							
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">City</label>
                                <div class="controls">
                                    <select name="city" id="city" class="validate[required],custom[onlyLetter]">
        <option>dharwad</option>
        <option>hubli</option>
        <option>california</option>
        <option>texas</option>
        <option>banglore</option>
      </select>
                                </div>
                            </div>
							
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Mobile</label>
                                <div class="controls">
                                    <input name="mobile" type="text" id="mobile" value="<?php echo $row['mobile']; ?>" class="validate[required],custom[mobile]">
                                </div>
                            </div> 
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Email</label>
                                <div class="controls">
                                    <input name="email" type="text" id="email" value="<?php echo $row['email']; ?>" class="validate[required],custom[email]">
                                </div>
                            </div>
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Password</label>
                                <div class="controls">
                                   <input name="password" type="password" id="password" value="<?php echo $row['password']; ?>" class="validate[required]">
                                </div>
                            </div>
							
							
							 <div class="control-group">
                                <label class="control-label" for="general-password">Profie Picture</label>
                                <div class="controls">
                                    <input name="profile_pic" type="file" id="profile_pic">
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











































