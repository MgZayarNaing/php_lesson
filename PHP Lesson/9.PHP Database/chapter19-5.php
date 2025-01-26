<?php

// Create connection
$con = new mysqli("localhost","root","","schooldb");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$query = "UPDATE students SET name='Mg Mg' WHERE id=2";

if ($con->query($query) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
?> 