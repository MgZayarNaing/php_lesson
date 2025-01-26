<?php
$host = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($host, $username, $password);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE schooldb";
if ($con->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $con->error;
}

$con->close();
?> 