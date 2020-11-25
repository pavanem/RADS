<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$feed_id=$_POST['feed_id']; 
$feed_name=$_POST['feed_name'];
$descr=$_POST['descr'];

$sql="update feedback set feed_name='$feed_name',descr='$descr' where feed_id='$feed_id'";
mysql_query($sql);

?>
<script>
alert('records updated');
document.location="feedback_view.php"
</script>