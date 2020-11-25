<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$event_id=$_REQUEST['event_id'];
$event_name=$_POST['event_name'];
$location=$_POST['location'];
$descr=$_POST['descr'];
$e_date=$_POST['e_date'];
$status=$_POST['status'];

$sql="update events set event_name='$event_name',location='$location',descr='$descr',e_date='$e_date',status='$status' where event_id='$event_id'";
mysql_query($sql);
?>

 <script>
 alert('Events updated');
 document.location="events_view.php"
 </script>