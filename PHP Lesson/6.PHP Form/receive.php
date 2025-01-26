<table bgcolor="#C4C4C4" align="center"
width="380" border="0">
<tr>
<td align="center"colspan="2"><font
color="#0000FF">Your Message</font></td>
</tr>
<tr>
<td>Your Name is</td>
<td><input type="text" value="<?php echo
$_GET['name']; ?>" readonly /></td>
</tr>
<tr>
<td>Your Email is</td>
<td><input type="email" value="<?php echo
$_GET['email']; ?>" readonly /></td>
</tr>
<tr>
<td>Your Mobile Number is</td>
<td><input type="number" value="<?php echo
$_GET['num']; ?>" readonly /></td>
</tr>
<tr>
<td>Your Message is</td>
<td><textarea readonly="readonly"><?php
echo $_GET['message'];?></textarea></td>
</tr>
</table>