<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Schooldb";

// Create connection
$con = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// query to create table
$query = "CREATE TABLE Students (
id INT(5) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL,
email VARCHAR(20),
mobile VARCHAR(20),
city VARCHAR(20)
)";

if ($con->query($query) === TRUE) {
  echo "Table Students created successfully";
} else {
  echo "Error creating table: " . $con->error;
}

$con->close();
?> 