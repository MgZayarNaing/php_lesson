<?php
	if(isset($_GET['set']))
	{
		$color=$_GET['c'];
		echo "<body bgcolor='$color'>";
	}
?>
<form>
select bgcolor
<select name="c">
	<option>pink</option>
	<option>lightgreen</option>
	<option>skyblue</option>
	<option>gray</option>
</select>
<input type="submit" value="set as background" name="set"/>
</form>
</body>