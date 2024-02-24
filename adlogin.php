<html>
<head>
<title>adminlogin</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST"><center>
<table border="20">

<tr>
<td>
Username:
</td>
<td><input type="text" name="adname">
</td>
</tr>
<tr>
<td>
Password:
</td>
<td><input type="password" name="password">
</td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="login" value="login"></center>
</tr>
</td>
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
if(isset($_POST["login"]))
{
 $adname=$_POST["adname"];
 $password=$_POST["password"];
 $sql2="SELECT adname,password FROM admin WHERE adname='$adname'";
//echo $sql2;
 $result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$p=$row["password"];
$u=$row["adname"];
}
}
else
{  
$p="bytughiuhjihiytgiuhijuhigoogyhu";
$u="ngyuvtfgnijmufg6yvijvihm";
}
 if($p==$password && $u==$adname)
{
header("Location:page2.php");
}
else
{
echo "incorrect password";
}
}
?>
