<html>
<head>

<title>form22</title>
<script>

  function myFunction() {
  confirm("Are You Sure Want to Register!!");
}
</script>

</head>
<body  bgcolor="#ffb3b3">
<a href="page2.php"><img src="img3.png"></a>

<form action="<?php $_PHP_SELF ?>" method="POST">
<center>
<table width="400" height="600" border="2">
<tr>
<td colspan="2"><img src="regi.png">

</tr>
</td>
<tr>
<td>
Patient name*:
</td>
<td>
<input type="text" name="pname">
</td>
</tr>
<tr>
<td>
Doctor:
</td>
<td>
<input type="text" name="dname">
</td>
</tr>
<tr>
<td>
Gender*:</td><td>Male<input type="radio" name="male" value="male">
Female<input type="radio" name="male" value="female">
</td>
</tr>
<tr>
<td>
email:
</td>
<td>
<input type="email" name="email">
</td>
</tr>
<tr>
<td>
Contact*:
</td>
<td>
<input type="tel" name="contact">
</td>
</tr>
<tr>
<td>
City*:
</td>
<td>
<input type="text" name="city">
</td>
</tr>
<tr>
<td>
Hospital Address*:
</td>
<td>
<textarea rows="2" cols="20" name="address"></textarea>
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
<td>
Required Date:
</td>
<td>
<input type="date" name="abc">
</td>
</tr>

<tr>
<td colspan="2"><center>
<input type="submit" value="register" name="register" onclick="myFunction()">
<input type="reset" value="reset" ></center>
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
echo"<br> connected successfully";
if(isset($_POST["register"]))
{
 $pname=$_POST["pname"];
 $dname=$_POST["dname"];
 $gender=$_POST["male"];
 $email=$_POST["email"];
 $contact=$_POST["contact"];
 $city=$_POST["city"];
 $address=$_POST["address"];
 $bloodgroup=$_POST["group"];
 $date=$_POST["abc"];
 $date=date('y/m/d');
 $sql1="INSERT INTO requestb(patientname,doctor,gender,email,contact,city,hospitaladd,bloodgrp,date)VALUES('$pname','$dname','$gender','$email',$contact,'$city','$address','$bloodgroup','$date')";
//$sql1="insert into requestb values('aa','bbb','m','sss',1233,'fff','aaaaa','a+','12/12/2012')";
if(mysqli_query($conn,$sql1))
{
 echo"<br> registration successfully";
}
else
{
 echo"error:".$sql1."<br>".mysqli_error($conn);
}/*
$sql2="SELECT id,fname,lname FROM user WHERE fname='$fname'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<br> ID:". $row["id"]. "<br> NAME:". $row["fname"]." ". $row["lname"];
}
}
else
{
 echo "0 results";
}header("location: page2.php");
}
if(isset($_POST["delete"]))
{
 $fname=$_POST["fname"];
 
$sql2="DELETE FROM user WHERE fname='$fname'";

if(mysqli_query($conn,$sql2))
{
 echo"<br> deleted successfully";
}
else
{
 echo"error:".$sql2."<br>".mysqli_error($conn);
}*/
}
?>


