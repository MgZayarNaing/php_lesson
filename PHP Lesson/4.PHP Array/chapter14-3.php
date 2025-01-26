<!-- nested Array -->
<?php
error_reporting(1);
$arr=array(array(10,20,10),array(10,10,20),array(10,10,20));
$s=0;
//using for loop:
for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
echo $arr[$i][$j]." ";
$s=$s+$arr[$i][$j];
}
echo "<br>";
}
echo "sum of array:".$s;
?> <hr>

<?php
error_reporting(1);
$arr=array(array(10,20,30),array(10,20,30),array(10,20,30));
$s1=0;
//using for loop:
foreach($arr as $k)
{
foreach($k as $v)
{
echo $v." ";
$s1=$s1+$v;
}
echo "<br>";
}
echo "sum of array:".$s1;
?> <hr>


<?php
error_reporting(1);
$arr=array(array("name"=>"Nilar","mob"=>22222),
array("name"=>"aungmyo","mob"=>33333),
array("name"=>"aungaung","mob"=>44444),
array("name"=>"ZinZin","mob"=>45454),
array("name"=>"MyoMyo","mob"=>98989)
);
echo '<table border="2" bgcolor="skyblue" width="300px">';
echo '<tr>';
echo '<td align="center">Name:</td>';
echo '<td align="center">MOb:</td>';
echo '</tr>';
foreach($arr as $k)
{
echo '<tr>';
foreach($k as $v)
{
echo '<td align="center">'.$v.'</td>';
}
echo '</tr>';
}
echo '</table>';
?> <hr>
