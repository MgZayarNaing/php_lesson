<head>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="lightblue">
<h1 align="center">Time City Shop Management(CRUD System)</h1>
<table align="center">
		<tr>
		    <td><button><a href="index.php">Insert</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><button><a href="display.php">Display</a></button></td>
		</tr>
</table>
<br/><br/>

<?php 
error_reporting(1);
extract($_POST); 
include('connection.php');
if($save){
//check shopname already exists or not
$q=$con->query("Select shopname from shoplist where shopname='$sn'");
$r=mysqli_num_rows($q);
if($r)
{
echo "<font color='red'>This shopname is already exists</font>";
}
else{
    $img=$_FILES['img']['name'];
    $query="insert into shoplist values ('','$sn','$o','$room','$p','$img')";
    $con->query($query);

    mkdir("image/$sn");
    move_uploaded_file($_FILES['img']['tmp_name'],"image/$sn/".$_FILES['img']['name']);

    echo "<font color='blue' align='center'>Congrates Data Insert Complete!</font>";
    header("location:display.php");
}
}

?>

		<form method="post" enctype="multipart/form-data">
			<table align="center">
                <tr>
                    <td>ShopName</td>
                    <td><input type="text" name="sn" required /></td>
                </tr>
                <tr>
                    <td>Owner</td>
                    <td><input type="text" name="o" required /></td>
                </tr>
                <tr>
                    <td>Room No.</td>
                    <td><input type="number" name="room" required /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="p" required /></td>
                </tr>
                <tr>
                    <td>Shop photo</td>
                    <td><input type="file" name="img" required /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="save" value="Insert Data"/>
                        </center>
				    </td>
			    </tr>
            </table>
        </form>
</body>