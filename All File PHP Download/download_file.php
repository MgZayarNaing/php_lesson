<?php
@$f=$_GET['f'];
if($f)
{
$file = ("myfolder/$f");
$filetype=filetype($file);
$filename=basename($file);
header ("Content-Type: $filetype");
header ("Content-Length: ".filesize($file));
header ("Content-Disposition: attachment; filename=".$filename); 
readfile($file);
}
/*
*** Developed by K-nox@KaungMyatThu To insert Your file in myfolder
  */
?>