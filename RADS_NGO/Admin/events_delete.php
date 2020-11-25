<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from events where event_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="events_view.php";
</script>