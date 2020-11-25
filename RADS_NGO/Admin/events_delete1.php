<?php


include('db.php');
if(isset($_POST['Submit']))
{
$id=$_POST['id'];
foreach($id as $b)
{
$query="delete from events where event_id='$b'";
mysql_query($query);
}
?>

<script>
alert('values deleted');
document.location="events_view.php";
</script>
<?php
}
?>