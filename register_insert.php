<?php
include('db.php');

$id=$_POST['(RAND()*401)+100'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$dd=date('Y-m-d');

if($dob>'2000-12-30')
{
?>

<script>
alert('User must be greater than 18 years');
document.location="register.php"
</script>

<?php
}
else
{
$sql="insert into user values('$id','$fname','$mname','$lname','$gender','$dob','$address','$city','$mobile','$email','$password')";
mysql_query($sql);
$sql1="insert into login values('$email','$password','donor','My reg no','$mobile')";
mysql_query($sql1);

?>
<script>
alert('User Registered');
document.location="../RADS/RADS_NGO/index.html"
</script>
<?php
}
?>