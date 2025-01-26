<table bgcolor="#C4C4C4" align="center"
width="380" border="0">
<tr>
<td align="center"colspan="2"><font
color="#0000FF">Your Order</font></td>
</tr>
<tr>
<td>Your Name is</td>
<td><input type="text" value="<?php echo
htmlspecialchars($_REQUEST['name']); ?>" readonly /></td>
</tr>
<tr>
<td>Your Email is</td>
<td><input type="email" value="<?php echo
$_REQUEST['email']; ?>" readonly /></td>
</tr>
<tr>
<td>Your Mobile Number is</td>
<td><input type="number" value="<?php echo
$_REQUEST['num']; ?>" readonly /></td>
</tr>
<tr>
<td>Your Address is</td>
<td><textarea readonly="readonly"><?php
echo $_REQUEST['address'];?></textarea></td>
</tr>
<tr>
<td>Your Phone is</td>
<td><input type="text" value="<?php echo
$_REQUEST['phone']; ?>" readonly /></td>
</tr>
</table>