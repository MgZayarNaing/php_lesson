<?php
error_reporting(1);
//first start session environment
session_start();
// retrieve session data
echo "Welcome ".$_SESSION['username']."<br/>";
echo "Your Email is ".$_SESSION['email']."<br/>";
echo "Your Phone is ".$_SESSION['phone'];
?>