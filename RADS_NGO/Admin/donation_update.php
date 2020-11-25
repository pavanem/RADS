<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$donation_id=$_POST['donation_id'];
$user_id=$_POST['user_id'];
$amt=$_POST['amt'];
$date=$_POST['date'];

$dd=date('Y-m-d');

if($date>$dd)
{
?>
<script>
alert('Date cant be greater than todays date');
document.location="donation_update.php"
</script>

<?php
}
else
{
$sql="update donation set user_id='$user_id',amt='$amt',date='$date' where donation_id='$donation_id'";
mysql_query($sql);
?>


<script>
alert('Thank you for updating');
document.location="donation_view.php"
</script>

<?php
}
?>