<?php

include('db.php');
if(isset($_POST['Submit']))
{
$id=$_POST['id'];
foreach($id as $b)
{
$query="delete from user where user_id='$b'";
mysql_query($query);
}
?>

<script>
alert('values deleted');
document.location="user_view.php";
</script>
<?php
}
?>