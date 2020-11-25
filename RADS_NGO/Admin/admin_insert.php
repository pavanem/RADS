<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into admin values('null','$username','$password')";
mysql_query($sql);

?>
<script>
alert('Welcome');
document.location="admin.php";
</script>