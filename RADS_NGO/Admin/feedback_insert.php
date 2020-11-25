<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$feed_name=$_POST['feed_name'];
$descr=$_POST['descr'];

$sql="insert into feedback values(null,'$feed_name','$descr')";
mysql_query($sql);

?>
<script>
alert('thank you for giving feedback');
document.location="feedback_view.php"
</script>