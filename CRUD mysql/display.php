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
<table border="1" align="center">
<tr style="background:#CCCCCC" height="30px">
<th>id</th>
<th>ShopName</th>
<th>Owner</th>
<th>Room No.</th>
<th>Phone</th>
<th>Shop Photo</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php 
error_reporting(1);
include('connection.php');
$data="SELECT * FROM shoplist ORDER BY id DESC";//ASC = ascending order,DESC = descending order
$val=$con->query($data);
while(list($id,$shopname,$owner,$roomno,$phone,$img) = mysqli_fetch_array($val))
{
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$shopname."</td>";
echo "<td>".$owner."</td>";
echo "<td>".$roomno."</td>";
echo "<td>".$phone."</td>";
echo "<td><img src='./image/$shopname/$img' height='100' width='100' /></td>";
echo "<td><a href='edit.php?id=$id'>Edit</a></td>";
echo "<td><a href='delete.php?id=$id&sn=$shopname&img=$img'>Delete</a></td>";
echo "</tr>";
}
?>
</table>
</body>