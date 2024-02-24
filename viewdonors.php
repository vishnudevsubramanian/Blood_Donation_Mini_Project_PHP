<html>
<head>
<title>view request</title>


</head>
<body bgcolor="#ffb3b3">
<a href="page2.php"><img src="img3.png"></a>

<h2>DONORS </h2>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table>
<tr>
<td>
Blood group*:
</td><td>
<select name="group">
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="view" name="view">
</tr>
</table>
</html>


<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="testdb1";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
//echo"<br> connected successfully";
if(isset($_POST["view"]))
{
$group=$_POST["group"];
$sql="SELECT * from user where bloodgroup='$group'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<table border=2> ";
echo "<tr>";
echo "<th>";
echo "firstname";
echo "</th>";
echo "<th>";
echo "lastName";
echo "</th>";
echo "<th>";
echo "Gender";
echo "</th>";
echo "<th>";
echo "Email";
echo "</th>";
echo "<th>";
echo "contact";
echo "</th>";
echo "<th>";
echo "city";
echo "</th>";
echo "<th>";
echo "address";
echo "</th>";
echo "<th>";
echo "bloodgroup";
echo "</th>";
echo "</tr>";


while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo  $row['fname'];
echo "</td>";
echo "<td>";
echo  $row['lname'];
echo "</td>";
echo "<td>";
echo  $row['gender'];
echo "</td>";
echo "<td>";
echo  $row['email'];
echo "</td>";
echo "<td>";
echo  $row['contact'];
echo "</td>";
echo "<td>";
echo  $row['city'];
echo "</td>";
echo "<td>";
echo  $row['address'];
echo "</td>";
echo "<td>";
echo  $row['bloodgroup'];
echo "</td>";
echo "</tr>";

}
echo "</table>";
}
}
 ?>
