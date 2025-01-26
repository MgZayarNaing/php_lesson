<!-- Associative Array -->
<?php
$Personage=array("KyawKyaw"=>"30","MyaMya"=>"21","MyintMyint"=>"43","ZinZin"=>"23","HtetHtet"=>"32");
echo "Zin Zin is ".$Personage["ZinZin"]."Years old";
echo "KyawKyaw is ".$Personage["KyawKyaw"]."Years old";
?> <hr>

<?php
$Personage['KyawKyaw']=30;
$Personage['MyaMya']=21;
$Personage['MyintMyint']=43;
$Personage['ZinZin']=23;
$Personage['HtetHtet']=32;
echo "Htet Htet is ".$Personage["HtetHtet"]."Years old";
?> <hr>

<?php
$state=array("Ygn"=>"Yangon","Mdy"=>"Mandalay","Bgo"=>"Bago","Py"=>"Pyay","Ka"=>"Kalaw","Bg"=>"Bagan");
foreach($state as $val)
{
echo $val." ";
}
?> <hr>

<?php
$state=array("Ygn"=>"Yangon","Mdy"=>"Mandalay","Bgo"=>"Bago","Py"=>"Pyay","Ka"=>"Kalaw","Bg"=>"Bagan");
foreach($state as $key=>$val)
{
echo $key."---".$val."<br/>";
}
?><hr>