<html>
<body>
<form method="request" action="order.php">
<table bgcolor="#C4C4C4" align="center" width="380" border="0">
<tr>
<td align="center"colspan="2"><font color="#0000FF"
size="5">Order Form</font></td>
</tr>
<tr>
<td width="312"></td>
<td width="172"> </td>
</tr>
<tr>
<td>Enter Your Name </td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Enter Your Email </td>
<td><input type="email" name="email" /></td>
</tr>
<tr>
<td>Enter Your Mobile Number </td>
<td><input type="number" name="num" /></td>
</tr>
<tr>
<td>Enter Your Address </td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td>Select Phone </td>
<td><select name="phone">
    <option value="vivo">ViVo</option>
    <option value="samsaung">SamSaung</option>
    <option value="apple">Apple</option>
    <option value="me">Me</option>
    <option value="oppo">Oppo</option>
</select></td>
</tr>
<td align="center" colspan="2"><input type="submit" value="order"
name="submit" /></td>
</table>
</form>
</body>
</html>