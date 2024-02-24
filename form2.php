<html>
<head>
<title>form2</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="POST">
<center>
<table width="400" height="600">
<tr>
<td colspan="2"><img src="requestt.png">
</tr>
</td>
<tr>
<td>
First name:
</td>
<td>
<input type="text" name="fname">
</td>
</tr>
<tr>
<td>
Last name:
</td>
<td>
<input type="text" name="lname">
</td>
</tr>
<tr>
<td colspan="2">
Gender:Male<input type="radio" name="male" value="male">
Female<input type="radio" name="male" value="female">
</td>
</tr>
<tr>
<td>
Age:
</td>
<td>
<input type="number" name="age">
</td>
</tr>
<tr>
<td>
Email:
</td>
<td>
<input type="email" name="email">
</td>
</tr>
<tr>
<td>
Contact:
</td>
<td>
<input type="tel" name="contact">
</td>
</tr>
<tr>
<td>
City:
</td>
<td>
<input type="text" name="city">
</td>
</tr>
<tr>
<td>
Address:
</td>
<td>
<textarea rows="2" cols="20" name="address"></textarea>
</td>
</tr>
<tr>
<td>
Blood group:
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
<td>
Required date:
</td>
<td>
<input type="date" name="date">
</td>
</tr>
<tr>
<td colspan="2"><center>
<input type="submit" value="request" name="request">
<input type="submit" value="delete request" name="delete"></center>
</td>
</tr>

</table>
</form>
</center>
</body>
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
if(isset($_POST["request"]))
{
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $gender=$_POST["male"];
 $age=$_POST["age"];
 $email=$_POST["email"];
 $contact=$_POST["contact"];
 $city=$_POST["city"];
 $address=$_POST["address"];
 $bloodgroup=$_POST["group"];
 $date=$_POST["date"];
 $sql1="INSERT INTO user1(firstname,lastname,gender,age,email,contact,city,address,bloodgrp,date)VALUES('$fname','$lname','$gender',$age,'$email',$contact,'$city','$address','$bloodgroup','$date')";
if(mysqli_query($conn,$sql1))
{
 echo"<br> requested successfully";
}
else
{
 echo"error:".$sql1."<br>".mysqli_error($conn);
}

}

if(isset($_POST["delete"]))
{
 $fname=$_POST["fname"];
 
$sql2="DELETE FROM user1 WHERE firstname='$fname'";

if(mysqli_query($conn,$sql2))
{
 //echo"<br> deleted successfully";
}
else
{
 echo"error:".$sql2."<br>".mysqli_error($conn);
}
}

?>

