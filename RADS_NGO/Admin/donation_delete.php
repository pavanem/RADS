<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from donation where donation_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="donation_view.php";
</script>