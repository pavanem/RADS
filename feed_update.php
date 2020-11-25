<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);
$feed_id=$_POST['feed_id'];
$name=$_POST['name'];
$desc=$_POST['desc'];

echo $sql="update feedback set name='$name',desc='$desc' where feed_id='$feed_id'";
mysql_query($sql);

?>
<script>
alert('thank you for updating');
document.location="feed_view.php"

</script>