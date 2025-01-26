<?php
error_reporting(1);
//set cookie
setcookie("user", $_POST['n'] , time()+60*60);
setcookie("age", $_POST['a'], time()+60*60);
setcookie("profile", $_POST['prof'], time()+60*60);
?>
<html>
<body>
<form method="post">
Enter your name <input type="text" name="n"/><hr/>
Enter your age <input type="text" name="a"/><hr/>
Enter your profile <input type="text" name="prof"/><hr/>
<input type="submit" value="SET COOKIE"/>
</form>
</body>
</html>

<?php
//Retrieve all cookies
print_r($_COOKIE);
?>