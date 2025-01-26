<?php
$i = 1;

while($i <= 10) {
  echo "$i <br>";
  if ($i == 5) {
    break;
  }
  $i++;
}
?> 
<hr>

 <?php
$j = 1;

while($j <= 10) {
  echo "run <br/>";
  if ($j == 5) {
    $j++;
    continue;
  }
  echo "$j <br>";
  $j++;
}
?> 