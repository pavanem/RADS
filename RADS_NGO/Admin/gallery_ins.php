 
<?php 

$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);
 
$title=$_POST['title'];
    
   
	 
$image=$_FILES['image']['name'];
$tmp_location=$_FILES['image']['tmp_name'];
$target="upload_img/".$image;
$target_dir = "upload_img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo'<script type="text/javascript">
	         alert("Not a valid file. Please upload an image file");
	        document.location="gallery_view.php";
	         </script>';
  }
else
{
          move_uploaded_file($tmp_location,$target);



$query="insert into gallery values('null','$title','$image')";
    if(!mysql_query($query))
    {
        echo'problem is query'.mysql_error();
        die();
    }
    else
      {
       echo'<script type="text/javascript">
	   alert("Photo Added");
	  document.location="gallery_view.php";
	  </script>';
     }
}
?>








