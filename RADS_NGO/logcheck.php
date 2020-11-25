<?php session_start(); ?>
<?php
	$username=$_POST["uname"];
	$password=$_POST["pwd"];	
	include('db.php');
	$sql="select * from login where username='$username' and password='$password'";
	$res=mysql_query($sql);
	if($row=mysql_fetch_array($res))
	{
	$type=$row["utype"];
	
	$_SESSION["uname"]=$username;
	
	if($type=="admin")
	{
	?>
	<script>
	document.location="Admin/home.php";
	</script>
	<?php
	}
	
	else if($type=="donor")
	{
	?>
	<script>
	document.location="Donor/home.php";
	</script>
	<?php
	}
	
	
}
	
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>