<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$id=$_REQUEST['gallery_id'];
$title=$_POST['title'];
$image=$_POST['image'];

$sql="update gallery set title='$title',image='$image' where gallery_id='$id'";
mysql_query($sql);
?>

<script>
alert('Thank you for updating');
document.location="gallery_view.php"
</script>