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
                        <h4>Add Events</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="events_insert.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                           
                            <div class="control-group">
                                <label class="control-label" for="general-text">Event Name</label>
                                <div class="controls">
								<input name="event_name" id="general-text" type="text"  class="validate[required],custom[onlyLetter]">
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Location</label>
                                <div class="controls">
                                   <input name="location" type="text" id="general-text" class="validate[required],custom[onlyLetter]">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Description</label>
                                <div class="controls">
                                    <textarea name="descr" class="validate[required]" id="general-textarea"></textarea>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="general-placeholder">Date</label>
                                <div class="controls">
                                    <input name="e_date" type="date" class="validate[required],custom[date]" id="general-text">
                                </div>
                            </div>
                            <p>
							<div class="control-group">
                              <label class="control-label" for="general-textarea">Event Status</label>
							  <div class="controls">
							    <select name="status" id="status">
							      <option value="Ongoing">Ongoing</option>
							      <option value="Completed">Completed</option>
							      <option value="Future">Future</option>
						        </select>
							  </div>
						  </div>
                            </p>
                            <div class="controls">
                                     
								   
								   
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





