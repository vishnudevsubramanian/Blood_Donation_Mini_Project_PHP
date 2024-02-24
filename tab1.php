<html>
<head>

<title>tab1</title>
</head>
<body background="bt.jpeg">
<form action="<?php $_PHP_SELF ?>" method="POST">
<center>
<table width="300" height="300">
<tr>
<td colspan="2"><img src="regi.png">

</tr>
</td>
<tr>
<td>
Patient name*:
</td>
<td>
<input type="text" name="fname">
</td>
</tr>
<tr>
<td>
Hospital name*:
</td>
<td>
<input type="text" name="fname">
</td>
</tr>
<tr>
<td>
Gender*:
</td>
<td>
Male<input type="radio" name="male" value="male">
Female<input type="radio" name="male" value="female">
</td>
</tr>
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
<input type="submit" value="register" name="register">
</td>
</tr>
</center>
</table>
</form>
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
if(isset($_POST["register"]))
{
 $fname=$_POST["fname"];
 $gender=$_POST["male"];
 $bloodgroup=$_POST["group"];
$sql1="INSERT INTO Request(fname,gender,bloodgroup)VALUES('$fname','$gender','$bloodgroup')";
if(mysqli_query($conn,$sql1))
{
 echo"<br> registration successfully";
}
else
{
 echo"error:".$sql1."<br>".mysqli_error($conn);
}}
