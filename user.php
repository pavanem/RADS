<form action="user_ins.php" method="post" enctype="multipart/form-data" name="form1">
  <p>&nbsp;</p>
  <table width="265" border="1">
    <tr>
      <td width="101">fn</td>
      <td width="148"><input name="fn" type="text" id="fn"></td>
    </tr>
    <tr>
      <td>mn</td>
      <td><input name="mn" type="text" id="mn"></td>
    </tr>
    <tr>
      <td>ln</td>
      <td><input name="ln" type="text" id="ln"></td>
    </tr>
    <tr>
      <td>gender</td>
      <td><p>
        <label>
        <input type="radio" name="gender" value="male">
  male</label>
        <br>
        <label>
        <input type="radio" name="gender" value="female">
  female</label>
        <br>
      </p></td>
    </tr>
    <tr>
      <td>dob</td>
      <td><input name="dob" type="text" id="dob"></td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="address" id="address"></textarea></td>
    </tr>
    <tr>
      <td>city</td>
      <td><select name="city" id="city">
        <option>dharwad</option>
        <option>hubli</option>
        <option>ankola</option>
        <option>belgavi</option>
      </select></td>
    </tr>
    <tr>
      <td>mobile</td>
      <td><input name="mobile" type="text" id="mobile"></td>
    </tr>
    <tr>
      <td>email</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr>
      <td>profile pic </td>
      <td><input name="profile_pic" type="file" id="profile_pic"></td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
