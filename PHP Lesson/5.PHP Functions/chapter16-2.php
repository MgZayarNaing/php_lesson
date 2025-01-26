<?php
if(isset($_GET['sub']))
{
    if(empty($_GET['n']))
    {
    echo "<font color='red'>fill your name first</font>";
    }
    else
    {
    if(strlen($_GET['n'])<5)
    {
    echo "<font color='red'>name must be greater than
    5</font>";
    }
    else
    {
    echo "welcome ".$_GET['n'];
    }
    }
}
?>
<form>
    Enter your name<input type="text" name="n"/>
    <input type="submit" name="sub" value="show my name"/>
</form>

