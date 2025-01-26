<?php
session_start();
if(@$_POST['sub'])
{
$u = $_POST['un'];
$p = $_POST['pwd'];
if($u =="TunTun" && $p=="san123")
{
$_SESSION['user'] = $u;
$_SESSION['start'] = time(); // taking now logged in time
$_SESSION['expire'] = $_SESSION['start'] + (1*60) ;
// ending a session in 1 minutes from the starting time
header('Location: Profile.php');
}
else
{
echo "<center><h3 style='color:red;'>Please enter Username or Password again !</h3></center>";
}
}
?>

<html>
<body bgcolor="lightgreen">
<form name="form1" method="post">
    <center>
    <h2>Log in</h2>
<table>
<tr><td>Username </td><td><input type="text" name="un"></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
</table>
<input type="submit" value="SignIn" name="sub">
</center>
</form>
</body>
</html>