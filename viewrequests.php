<html>
<head>
<title>view request</title>
</head>
<h2>REQUESTS </h2>
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
$sql="SELECT * from user1";
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
echo "age";
echo "</th>";
echo "<th>";
echo "email";
echo "</th>";
echo "<th>";
echo "Moblie No";
echo "</th>";
echo "<th>";
echo "City";
echo "</th>";
echo "<th>";
echo "Address";
echo "</th>";
echo "<th>";
echo "bloodgroup";
echo "</th>";
echo "<th>";
echo "date";
echo "</th>";
echo "</tr>";


while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo  $row['firstname'];
echo "</td>";
echo "<td>";
echo  $row['lastname'];
echo "</td>";
echo "<td>";
echo  $row['gender'];
echo "</td>";
echo "<td>";
echo  $row['age'];
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
echo  $row['bloodgrp'];
echo "</td>";
echo "<td>";
echo  $row['date'];
echo "</td>";
echo "</tr>";

}
echo "</table>";
}
 
?>
