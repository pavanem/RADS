<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from expenses where exp_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="expenses_view.php";
</script>