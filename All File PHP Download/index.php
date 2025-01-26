<?php
$of=opendir("myfolder");
while($file=readdir($of))
{
echo "<a href='download_file.php?f=$file'>".$file."</a><br/>";
}
?>