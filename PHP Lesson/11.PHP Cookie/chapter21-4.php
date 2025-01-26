<?php
@$id=$_POST['id'];
@$pass=$_POST['pass'];
if(isset($_POST['signin']))
{
if($id=="kyawkyaw" && $pass="1234")
{
if($_POST['ch']==true)
	{
setcookie("cid",$id,time()+60*60);
setcookie("cpass",$pass,time()+60*60);
header('location:welcome.html');
}
header('location:welcome.html');
}
else
{
echo "invalid id or pass";
}
}
?>
<form method="post">
<body>
Enter your id
<input type="text" name="id" value="<?php echo @$_COOKIE['cid'];?>"/>
Enter your password
<input type="password" name="pass" value="<?php echo @$_COOKIE['cpass'];?>"/>
<input type="checkbox" name="ch"/>
stay signed in
<input type="submit" name="signin" value="SignIn"/>
</body>
</form>