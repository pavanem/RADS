
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-weight: bold;
}
.style2 {
	font-size: small;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {font-size: xx-large}
.style5 {font-size: x-large}
.style6 {color: #FF0000}
.style7 {color: #00FF00}
.style8 {color: #000099}
.style13 {color: #FF0033}
-->
</style>

<a href="" onClick="window.print()">Print</a>

<?php

include('db.php');
$a=$_REQUEST['a'];

 $sql="select * from donation d,user u where d.user_id=u.user_id and d.donation_id='$a'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>

<table width="801" height="372" border="1" align="center" cellpadding="3" bgcolor="#EAF9FF">
  <tr>
    <td colspan="4" class="style1"><div align="center" class="style4"><span class="style6">R</span>ural <span class="style7">A</span>gricultural <span class="style8">D</span>evelopmental <span class="style13">S</span>ociety </div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
      <p class="style2">Belgaum Road, Mudholkar Compound, 3rd cross,</p>
      <p class="style2">Dharwad </p>
      </div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><strong><span class="style5">CASH MEMO </span></strong></div></td>
  </tr>
  <tr>
    <td width="183">Receipt Number</td>
    <td width="189"><?php echo $row['donation_id']; ?></td>
    <td width="77">Date</td>
    <td width="308"><?php echo $row['date']; ?></td>
  </tr>
  <tr>
    <td><em>Cash Received <strong>From</strong></em> </td>
    <td colspan="3"><?php echo $row['fname']; ?>.<?php echo $row['mname']; ?>.<?php echo $row['lname']; ?></td>
  </tr>

  <tr>
    <td><em>Address</em></td>
    <td colspan="3"><p><?php echo $row['address']; ?></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><em>Mobile</em></td>
    <td colspan="3"><?php echo $row['mobile']; ?></td>
  </tr>
  <tr>
    <td><strong>AMOUNT PAID </strong></td>
    <td colspan="3"><?php echo $row['amt']; ?></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>Signature</p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
