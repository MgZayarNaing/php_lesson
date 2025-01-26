<?php 
include('connection.php');
$sql=$con->query("delete from shoplist where id='{$_GET['id']}'");
unlink("image/".$_GET['sn']."/".$_GET['img']);
rmdir("image/".$_GET['sn']);
header('location:display.php');
?>