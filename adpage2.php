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
$sql="SELECT * from user";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<table border=2> ";
echo "<tr>";
echo "<th>";
echo "username";
echo "</th>";
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
echo "date of birth";
echo "</th>";
echo "</tr>";


while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo  $row['username'];
echo "</td>";
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
echo "<td>";
echo  $row['date_of_birth'];
echo "</td>";
echo "</tr>";

}
echo "</table>";
}
 
?>
