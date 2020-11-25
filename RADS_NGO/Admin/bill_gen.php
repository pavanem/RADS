<style type="text/css">
<!--
.style1 {
	font-size: large;
	font-weight: bold;
}
.style2 {font-size: x-large; font-weight: bold; }
-->
</style>

<form name="f1" method="post" action="bill.php">
<?php
include('db.php');

$query="select * from bill b, user u where b.user_id=u.user_id";
$res=mysql_query($query);
$row=mysql_fetch_array($res)


?>


                     <div align="center">
                       <p class="style2">RURAL AGRICULTURAL DEVELOPMENTAL SOCIETY</p>
                       <p class="style1">&nbsp;</p>
                     </div>
                <table width="360" height="230" border="1" align="center" cellpadding="3">
				
<tr>
<th width="184" class="span1 text-center"><div align="left">RECEIPT NUMBER</div></th>
<td width="152" class="span1 text-center"><?php echo $row['receipt_id'];?></td>
</tr>

<tr>

<th class="span1 text-center"><div align="left">DONOR NAME</div></th>
<td class="span1 text-center"><?php echo $row['fname'];?></td>
</tr>

<tr>

<th class="span1 text-center"><div align="left">AMOUNT</div></th>
<td class="span1 text-center"><?php echo $row['amt'];?></td>
</tr>

<tr>

<th class="span1 text-center"><div align="left">ADDRESS</div></th>
<td class="span1 text-center"><?php echo $row['address'];?></td>
</tr>

<tr>

<th class="span1 text-center"><div align="left">MOBILE</div></th>
<td class="span1 text-center"><?php echo $row['mobile'];?></td>
</tr>

<tr>
<th class="span1 text-center"><div align="left">DATE</div></th>
<td class="span1 text-center"><?php echo $row['date'];?></td>


</tr>

<tr>
<td height="40" id="Back" onClick="bill.php" input name="Back" type="submit" value="Back"><input name="back" type="submit" id="back" value="Back">   </td>
<td><input name="print" type="reset" id="print" value="Print"></td>
</tr>







</table>


				
				
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <p align="center"><strong> Signature</strong></p>
                <p align="center">________</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
</form>