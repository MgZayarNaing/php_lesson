<!-- PHP string functions -->
<?php
    $val="welcome ";
    echo str_repeat($val,3);
?><hr/>

<?php
    $str="welcome";
    echo str_replace("e","@",$str);
?><hr/>

<?php
    $str="hello user how r you";
    echo str_word_count($str);
?><hr/>

<?php
    $str="welcome to the world of php";
    echo substr($str,8,6);
?>