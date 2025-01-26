<?php 
$host="localhost";
$user="root";
$pass="";
$dbname = "tcshopm";
//connection
$con= new mysqli($host,$user,$pass,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>