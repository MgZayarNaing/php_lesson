<?php
session_start();
if($_SESSION['em']=="")
{
header('location:index.php');
}
else{
  $file = "users/".$_SESSION['em']."/".$_SESSION['pass'];
  $fo = fopen($file,"r");
  $contents = fread($fo,filesize($file));
 ?>
<table width="604" align="center" bgcolor="#EFEFEF" border="1">
  <tr>
    <td width="763" height="41"><p align="center" style="color:#0033FF">Welcome <?php echo $_SESSION['em'];?></p></td>
    <td width="125"><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td height="374"><p align="center"><?php echo $contents; ?></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;</td>
  </tr>
</table>
<?php }  ?>