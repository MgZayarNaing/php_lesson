<?php
//first start session environment
session_start();
error_reporting(1);
// store data in session variable
$_SESSION['username']= $_POST['un'];
$_SESSION['email']= $_POST['em'];
$_SESSION['phone']= $_POST['ph'];
?>
<html>
<body>
<form method="post">
Enter your user name <input type="text" name="un"/><hr/>
Enter your email <input type="text" name="em"/><hr/>
Enter your phone <input type="text" name="ph"/><hr/>
<input type="submit" value="Store in session variable"/>
</form>
</body>
</html>