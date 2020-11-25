<?php
$b=$_REQUEST['a'];
$con=mysql_connect('localhost','root','');
mysql_select_db('rads',$con);

$query="select * from feedback where feed_id='$b'";
$res=mysql_query($query);
$row=mysql_fetch_array($res)
 ?>
<form name="form1" method="post" action="feed_update.php">
  <p>
    <input name="feed_id" type="hidden" id="feed_id" value="<?php echo $row['feed_id]; ?>">
  </p>
  <table width="210" height="153" border="1">
    <tr>
      <td width="86">name</td>
      <td width="108"><input name="name" type="text" id="name" value="<?php echo $row['name']; ?>"></td>
    </tr>
    <tr>
      <td>desc</td>
      <td><textarea name="desc" id="desc"><?php echo $row['desc']; ?>
</textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

