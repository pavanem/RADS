<?php
$b=$_REQUEST['a'];
include('db.php');
$query="delete from feedback where feed_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted successfuly');
document.location="feed_view.php";
</script>