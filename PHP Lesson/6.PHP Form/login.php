<?php
if(isset($_POST['login']))
{
$eid=$_POST['e'];
$pass=$_POST['p'];
if($eid=="" || $pass=="")
	{
echo "<font color='red'>Please fill your email and pass</font>";
}
else
{
if($eid=="admin@gmail.com" && $pass=="1234")
{
header('location:welcome.html');
}
else
{
echo "<font color='red'>wrong email or pass</font>";
}
}
}
?>
<body bgcolor="gold">
<center>
<form method="post">
Enter your email<input type="email" name="e"  /><br/>
Enter your pass<input type="password" name="p"  /><br/>
<input type="submit" value="SIGNIN" name="login"/>
</form>
</center>
</body>

<!-- if(isset(submit)){
	if(empty string){
		error
	}else{
		if(check gmail pass){
			welcome
		}else{
			wrong 
		}
	}
} -->