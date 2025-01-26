<?php
// Create connection
$con = new mysqli("localhost","root","","schooldb");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// query to delete a record
$query = "DELETE FROM students WHERE id=2";

if ($con->query($query) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
?> 