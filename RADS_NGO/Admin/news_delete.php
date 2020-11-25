<?php
$b=$_REQUEST['a'];

include('db.php');
$query="delete from news where news_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="news_view.php";
</script>	