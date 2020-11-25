<?php

include('db.php');

$user_id=$_POST['user_id'];
$amt=$_POST['amt'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];


$dd=date('Y-m-d');

if($date>$dd)
{
?>

<script>
alert('Date cant be greater than todays date');
document.location="bill.php"
</script>

<?php
}
else
{
$sql="insert into bill values(null,'$user_id','$amt','$address','$mobile','$date')";
mysql_query($sql);
?>

<script>
alert('values inserted');
document.location="bill_gen.php"
</script>

<?php
}
?>

