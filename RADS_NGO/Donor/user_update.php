<?php

include('db.php');

$user_id=$_POST['user_id'];
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
$profile_pic=$_POST['profile_pic'];

$sql="update user set fname='$fname',mname='$mname',lname='$lname',gender='$gender',dob='$dob',address='$address',city='$city',mobile='$mobile',email='$email',password='$password',profile_pic='$profile_pic' where user_id='$user_id'";
mysql_query($sql);

?>
<script>
alert('Thank you for updating');
document.location="user_view.php"
</script>