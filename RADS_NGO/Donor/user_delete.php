<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from user where user_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="user_view.php";
</script>