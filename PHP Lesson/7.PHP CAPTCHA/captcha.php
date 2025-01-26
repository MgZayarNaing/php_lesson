<?php
error_reporting(1);
$arr=range(9,0);//create array [ [0] => 0, [1] => 1 ,..., [9]=>9]
$brr=range(9,0);
$randa=array_rand($arr);//return random keys of array;
$randb=array_rand($brr);
$a=$arr[$randa];
$b=$brr[$randb];
$r=$a+$b;
$cap=$a."+".$b;
if(isset($_POST['b1']))
{
if($_POST['t2']==$_POST['t3'])
{
echo '<center>'.'<font color="blue" size="5">'."Welcome
user".'</font>'.'</center>';
}
else
{
echo '<center>'.'<font color="red" size="5">'."Please fill the
correct answer".'</font>'.'</center>';
}
}
?>
<html>
    <body bgcolor="skyblue">
<center>
<form method="post">
<?php
error_reporting(1);
//echo $randa;
//echo $arr;
echo $cap."=";
?>
<input type="hidden" name="t3" value="<?php echo $r; ?>">
<input type="text" name="t2" autofocus><br>
<input type="submit" name="b1" value="match">
</form>
</center>
</body>
</html>