<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$news_id=$_POST['news_id'];
$heading=$_POST['heading'];
$descr=$_POST['descr'];
$date=$_POST['date'];



$sql="update news set heading='$heading',descr='$descr',date='$date' where news_id='$news_id'";
mysql_query($sql);
?>

<script>
alert('News updated');
document.location="news_view.php"
</script>