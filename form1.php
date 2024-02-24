
<html>
<head>

<title>form1</title>
</head>
<body bgcolor="#ffb3b3">
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
USER NAME*:
</td>
<td>
<input type="text" name="user">
</td>
</tr>
</td>
<tr>
<td>
First name*:
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
Contact Number*:
</td>
<td>
<input type="tel" name="contact">
</td>
</tr>
<tr>
<td>
State:
</td>
<td>
<input type="text" name="state">
</td>
</tr>
<tr>
<td>
District:
</td>
<td>
<input type="text" name="dis">
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
Address*:
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

DATE OF BIRTH:</td><td><input type="date" name="datess"></td></tr>
<tr>
<td colspan="2">
<center><input type="submit" value="register" name="register" onclick="return confirm('ARE YOU SURE WANT TO SAVE');" >
<input type="reset" value="reset"><center>
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
if(isset($_POST['register']))
{
 $user=$_POST["user"];
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $gender=$_POST["male"];
 $email=$_POST["email"];
 $contact=$_POST["contact"];
 $city=$_POST["state"];
 $city=$_POST["dis"];
 $city=$_POST["city"];
 $address=$_POST["address"];
 $bloodgroup=$_POST["group"];
 $date=$_POST["datess"];
 $sql1="INSERT INTO user(username,fname,lname,gender,email,contact,state,district,city,address,bloodgroup,date_of_birth) VALUES('$user','$fname','$lname','$gender','$email','$contact','$state','$district','$city','$address','$bloodgroup','$date')";
 if(mysqli_query($conn,$sql1))
 {
 echo "registration successfully";
 header("Location:user.php");
 }
 else
 {
  echo "error".$sq1."<br>".mysql_error($conn);
 }
}
?>





























































