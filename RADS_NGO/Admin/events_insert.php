<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$event_name=$_POST['event_name'];
$location=$_POST['location'];
$descr=$_POST['descr'];
$e_date=$_POST['e_date'];
$status=$_POST['status'];

$dd=date('Y-m-d');

if($e_date>$dd)
{
?>

<script>
alert('Date cant be greater than todays date');
document.location="events.php"
</script>

<?php
}
else
{
$sql="insert into events values(null,'$event_name','$location','$descr','$e_date','$status')";
mysql_query($sql);
?>
 <script>
 alert('Events inserted');
 document.location="events_view.php"
 </script>
 
 <?php
 }
 ?>