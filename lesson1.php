<?php
 echo "Welcome to the world of php.";
?><hr>
<?php
 $mycar="Honda";
 echo $mycar;
?><hr>
<?php
 $mycar="Honda Insight";
 echo $mycar." is Riding.";
?><hr>
<?php
 $a=500;
 $b=700;
 $c=$a+$b;
 echo "SUM = ".$c;
?><hr>
<?php
 $a=900;
 $b=200;
 $c=$a-$b;
 echo "SUB = ".$c;
?><hr>
<?php
 $name="Aung";
 echo $name;
 //unset($name);
 echo $name;
?><hr>
<?php
 $mycar="Honda Insight";
 var_dump ($mycar);
?><hr>
<?php
 $a=500;
 $b=700;
 $c=$a+$b;
 var_dump($c);
?><hr>
<?php
 $a=500.2;
 $b=700.3;
 $c=$a+$b;
 var_dump($c);
?><hr>
<?php
 $a=true;
 $b=false;
 var_dump($a,$b);
?><hr>
<?php
 $n="mgmg";
 $$n="tuntun";
 echo $n."<hr>";
 echo $$n."<hr>";
 echo $mgmg;
?><hr>