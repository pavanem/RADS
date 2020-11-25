<?php

include('db.php');

if(isset($_POST['Submit']))
{
$id=$_POST['id'];
foreach($id as $b)
{
$query="delete from donation where donation_id='$b'";
mysql_query($query);
?>

<script>
alert('values deleted');
document.location="donation_view.php";
</script>

<?php
}
?>