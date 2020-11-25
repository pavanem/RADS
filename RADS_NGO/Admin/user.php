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
                        <h4>Add User</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="user_insert.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                           
                            <div class="control-group">
                                <label class="control-label" for="general-text">First Name</label>
                                <div class="controls">
								<input name="fname" type="text" id="fname" class="validate[required],custom[onlyLetter]">
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Middle Name</label>
                                <div class="controls">
                                    <input name="mname" type="text" id="mname" class="validate[required],custom[onlyLetter]">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Last Name</label>
                                <div class="controls">
                                    <input name="lname" type="text" id="lname" class="validate[required],custom[onlyLetter]">
                                </div>
                            </div>
							
						<div class="control-group">
                                <label class="control-label" for="general-placeholder">Gender</label>
                                <div class="controls">
                                    <p>
        <label>
        <input type="radio" name="gender" value="m" class="validate[required]">
  M</label>
        <label>
        <input type="radio" name="gender" value="f" class="validate[required]">
  F</label>
        <br>
      </p>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Date Of Birth</label>
                                <div class="controls">
                                    <input name="dob" type="date" id="dob" class="validate[required],custom[date]">
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Address</label>
                                <div class="controls">
                                    <textarea name="address" id="address" class="validate[required]"></textarea>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">City</label>
                                <div class="controls">
                                    <select name="city" id="city" class="validate[required]">
                                      <option>Dharwad</option>
                                      <option>Hubli</option>
                                      <option>Banglore</option>
                                      <option>Manglore</option>
                                      <option>Belgaum</option>
                                      <option>Chitradurga</option>
                                      <option>Mysore</option>
                                      <option>Ankola</option>
                                      <option>Karwar</option>
                                      <option>Udupi</option>
                                      <option>Davangere</option>
                                      <option>Other</option>
                                    </select>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Mobile</label>
                                <div class="controls">
                                 <input name="mobile" type="text" id="mobile" class="validate[required],custom[mobile]">
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Email</label>
                                <div class="controls">
                                <input name="email" type="text" id="email" class="validate[required],custom[email]">
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Password</label>
                                <div class="controls">
                                   <input name="password" type="password" id="password" class="validate[required]">
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































