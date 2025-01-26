<body bgcolor="lightgreen">
<?php
session_start();
if(!$_SESSION['user'])
{
echo "<p style='color:red'>Please Login again</p>";
echo "<a href='login.php'>Click Here to Login</a>";
}
else
{
$now = time(); // checking the time now when profile page starts
if($now > $_SESSION['expire'])
{
session_destroy();
echo "<p style='color:red'>Your session has expire ! <a href='login.php'>Login
Here</a></p>";
}
else
{
echo "<center>";
echo "<h1 style='color:blue;'>Welcome " . $_SESSION['user']."</h1><br/>";
echo "<a href='logout.php'>LogOut</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='Profile.php'>Check Session</a>";
echo "</center>";
}
}
?>
</body>
