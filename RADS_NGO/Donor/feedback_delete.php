<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from feedback where feed_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="feedback_view.php";
</script>