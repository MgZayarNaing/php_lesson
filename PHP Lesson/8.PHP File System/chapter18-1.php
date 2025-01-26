<!--create/write-->

<?php
if(isset($_POST['save']))
{
$f=$_POST['file'];
$ext=$_POST['ext'];
$data=$_POST['data'];
$file=$f.$ext;
if(file_exists($file))
{
echo "<font color='red'>file already exists</font>";
}
else
{
$fo = fopen($file,"w");
fwrite($fo,$data);
echo  "your data is saved";
}
}
?>
<form method="post">
enter your file   <input type="text" name="file" required /><br/><br/>
choose your extension <select name="ext">
<option value="">choose your extension</option>
<option>.txt</option>
<option>.html</option>
<option>.php</option>
</select><br/><br/>
Enter your contents<textarea rows="10" cols="30" name="data" required >
<?php echo @$contents ; ?>
</textarea><br/><br/>
<input type="submit" value="Save" name="save"/>
</form>