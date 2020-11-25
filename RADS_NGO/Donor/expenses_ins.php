<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$event_id=$_POST['event_id'];
$amt=$_POST['amt'];
$date=$_POST['date'];

$dd=date('Y-m-d');

if($date>$dd)
{
?>

<script>
alert('Date cant be greater than todays date');
document.location="expenses.php"
</script>


<?php
}
else
{
$sql="insert into expenses values(null,'$event_id','$amt','$date')";
mysql_query($sql);
?>


<script>
alert('Thank you for inserting');
document.location="expenses_view.php"
</script>
<?php
}
?>