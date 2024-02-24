<html>
<head>
<title>userlogin</title>
</head>
<body bgcolor="black" text="white">
<form action="<?php $_PHP_SELF ?>" method="POST"><center>
<table border="30">
<tr>
<td colspan="2"><center><img src="USERLOGIN.png"></center>
<tr>
<td>
Username:
</td>
<td><input type="text" name="txtname">
</td>
</tr>
<tr> 
<td>
Password:
</td>
<td><input type="password" name="pass">
</td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="login" value="login"></center>
</tr>
</td>
</table>
</form>
<a href="form1.php"><img src="newuserlogin.png"></a>
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
if(isset($_POST["login"]))
{
 $uname=$_POST["txtname"];
 $pass=$_POST["pass"];
 $sql2="SELECT password,username FROM user WHERE username='$uname'";
//echo $sql2;
 $result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$p=$row["password"];
$u=$row["username"];
}
}
else
{  
$p="bytughiuhjihiytgiuhijuhigoogyhu";
$u="ngyuvtfgnijmufg6yvijvihm";
}
 if($p==$pass && $u==$uname)
{
header("Location: page2.php");
}
else
{
echo "incorrect password";
}
}
?>
