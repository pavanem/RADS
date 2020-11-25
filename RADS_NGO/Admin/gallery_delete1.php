<?php

include('db.php');
if(isset($_POST['Submit']))
{
$id=$_POST['id'];
foreach($id as $b)
{
$query="delete from gallery where gallery_id='$b'";
mysql_query($query);
}
?>

<script>
alert('values deleted');
document.location="gallery_view.php";
</script>
<?php
}
?>