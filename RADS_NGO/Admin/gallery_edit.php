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
                        <h4>Edit</h4>
                    </div>
                    <!-- END General Forms Title -->
<?php
$b=$_REQUEST['a'];
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from gallery where gallery_id='$b'";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
?>

                    <!-- General Forms Content -->
                    <div class="block-content">

						<form action="gallery_update.php" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                          <input name="gallery_id" type="hidden" id="gallery_id" value="<?php echo $row['gallery_id']; ?>">
                            <div class="control-group">
                                <label class="control-label" for="general-text">Title</label>
                                <div class="controls">
								<input name="title" type="text" id="title" value="<?php echo $row['title']; ?>"class="validate[required],custom[onlyLetter]">
                                   
                                  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Image</label>
                                <div class="controls">
                                    <input name="image" type="file" id="image">
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











































