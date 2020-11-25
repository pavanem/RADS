<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$exp_id=$_REQUEST['exp_id'];
$event_id=$_POST['event_id'];
$amt=$_POST['amt'];
$date=$_POST['date'];

$sql="update expenses set event_id='$event_id',amt='$amt',date='$date' where exp_id='$exp_id'";
mysql_query($sql);
?>

<script>
alert('Thank you for updating');
document.location="expenses_view.php"
</script>

