<table border=1>
<tr>
<td>gallery_id</td>
<td>title</td>
<td>image</td>
</tr>

<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('rads',$conn);

$query="select * from gallery";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['gallery_id'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['image'];?></td>
</tr>

<?php
}
?>
</table>