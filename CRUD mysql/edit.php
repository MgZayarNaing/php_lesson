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
include('connection.php');
$id = $_GET['id'];
$sql = $con->query("Select * from shoplist where id=$id");
$data = mysqli_fetch_array($sql);

extract($_POST);
if(isset($update)){
    $con->query("update shoplist set shopname='$sn',owner='$o',roomno='$r',phone='$p'
    where id=$id");
    header('location:display.php');
}
?>
		<form method="post" enctype="multipart/form-data">
			<table align="center">
                <tr>
                    <td>ShopName</td>
                    <td><input type="text" name="sn" value="<?php echo $data['shopname'] ?>" readonly /></td>
                </tr>
                <tr>
                    <td>Owner</td>
                    <td><input type="text" name="o" value="<?php echo $data['owner'] ?>" required /></td>
                </tr>
                <tr>
                    <td>Room No.</td>
                    <td><input type="number" name="r" value="<?php echo $data['roomno'] ?>" required /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="p" value="<?php echo $data['phone'] ?>" required /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="update" value="Update Data"/>
                        </center>
				    </td>
			    </tr>
            </table>
        </form>
</body>