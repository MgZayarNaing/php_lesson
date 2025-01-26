<!--index array-->
<?php
$colors = array("Red", "Blue", "Black");
echo "I like " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . ".";
?> <hr>

<?php
$colors = array("Red", "Blue", "Black");
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++) {
  echo $colors[$x];
  echo "<br>";
}
?> <hr/>

<?php
// $result=0;
// for($i=0;$i<= 20;$i+=1){
//   for($i % 2 > 0){
//     $result += $i;
//   }
// }
// echo $result;
?>


