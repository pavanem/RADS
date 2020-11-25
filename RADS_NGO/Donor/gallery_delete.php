<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from gallery where gallery_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="gallery_view.php";
</script>