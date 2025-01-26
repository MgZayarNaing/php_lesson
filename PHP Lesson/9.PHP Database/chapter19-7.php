<?php
//connect database
$con = new mysqli("localhost","root","","schooldb");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//select values from students table
$data="SELECT * FROM students";
$val=$con->query($data);
echo "<table border='1' bgcolor='lightblue' align='center' >";
echo "<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
</tr>";
while(list($id,$name,$eid,$mob,$city) = mysqli_fetch_array($val))
{
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$eid."</td>";
echo "<td>".$mob."</td>";
echo "<td>".$city."</td>";
echo "</tr>";
}
echo "</table>";
?>