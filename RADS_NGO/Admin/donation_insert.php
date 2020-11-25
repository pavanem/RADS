<?php
include('db.php')
$user_id=$_POST['user_id'];
$amt=$_POST['amt'];
$date=$_POST['date'];

$dd=date('Y-m-d');

if($date>$dd)
{
?>
<script>
alert('Date cant be greater than todays date');
document.location="donation.php"
</script>
<?php
}
else
{
$sql="insert into donation values(null,'$user_id','$amt','$date')";
mysql_query($sql);
?>


<script>
alert('Thank you for inserting');
document.location="donation_view.php"
</script>
<?php
}
?>