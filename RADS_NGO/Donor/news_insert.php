<?php

$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$heading=$_POST['heading'];
$descr=$_POST['descr'];
$date=$_POST['date'];

$dd=date('Y-m-d');

if($date>$dd)
{
?>

<script>
alert('Date cant be greater than todays date');
document.location="news.php"
</script>

<?php
}
else
{
$sql="insert into news values(null,'$heading','$descr','$date')";
mysql_query($sql);
?>

<script>
alert('values inserted');
document.location="news_view.php"
</script>

<?php
}
?>

