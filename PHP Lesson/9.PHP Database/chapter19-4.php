<?php
error_reporting(1);
// Create connection
$con = new mysqli("localhost","root","","schooldb");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if(isset($_GET['sub']))
{
$name=$_GET['name'];
$eid=$_GET['eid'];
$mob=$_GET['mob'];
$city=$_GET['city'];

$query="INSERT INTO students
VALUES ('', '$name','$eid','$mob','$city')";

if ($con->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $con->error;
}
}
?> 

<form>
Enter your name<input type="text" name="name" required /><hr/>
Enter your email<input type="text" name="eid" required /><hr/>
Enter your mobile<input type="text" name="mob" required /><hr/>
Enter your city<input type="text" name="city" required /><hr/>
<input type="submit" name="sub" value="INSERT"/><hr/>
</form>