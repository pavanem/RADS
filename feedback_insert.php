<?php
include('db.php'); 

$feed_name=$_POST['feed_name'];
$descr=$_POST['descr'];

$sql="insert into feedback values(null,'$feed_name','$descr')";
mysql_query($sql);

?>
<script>
alert('thank you for giving feedback');
document.location="feed_index.php"
</script>