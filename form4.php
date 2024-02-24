<html>
<head>
<title>form</title>
</head>
<body bgcolor="pink">
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="2"><tr>
<td colspan="2"><center><b><H2>APPLICATION FORM</H2>
</b></center></td></tr>
<tr><td>id:</td><td>
<input type="number" name="id"></td></tr>

<tr><td>name:</td><td><input type="text" name="name"></td></tr>


<tr><td>english:</td><td><input type="number" name="english"></td></tr>

<tr><td colspan="2"><center><input type= "submit" name = "save" value="save"><input type= "submit" name = "delete" value="delete"><input type= "submit" name = "update" value="update"><input type= "submit" name = "view" value="view"></center></td></tr>

</body>
</html>
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="ssw";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error) {
die("connection failed:".$conn->connect_error);
}
echo"<br>connected sucessfully";

if(isset($_POST["save"]))
{
 $id=$_POST["id"];
 $name=$_POST["name"];
 $english=$_POST["english"];	 
 $sql="INSERT INTO student (id,name,english) values ($id,'$name',$english)";
 if (mysqli_query($conn,$sql))
{
 echo"<br>record inserted";
}
else
{
 echo"error:"  . $sql . "<br>" . mysqli_error($conn);	
}
}
if(isset($_POST["delete"]))
{
$id=$_POST["id"];
$sql="DELETE FROM student WHERE id=$id";
if(mysqli_query($conn,$sql))
{
 echo"<br>recored deleted";
}
 else
{
 echo"error" . $sql . "<br>".mysqli_error($conn);
 }
}
 if(isset($_POST["update"]))
{
 $id=$_POST["id"];
 $name=$_POST["name"];
 $english=$_POST["english"];
 $sql="UPDATE student SET name='$name',english='$english' WHERE id=$id";
 if(mysqli_query($conn,$sql))
{
 echo "<br>new record updated succesfully";
}
 else
{
 echo"error:".sql."br".mysqli_error($conn);
}
}
if(isset($_POST["view"]))
{
 $sql2="SELECT id,name,english FROM student";
 $result=mysqli_query($conn,$sql2);
  if($result->num_rows>0)
{
 echo"<table border =2>";
 echo "<tr>";
 echo "<td>";
 echo "<id>";
echo "</td>";
echo "<td>";
echo "<name>";
echo "</td>";
echo "<td>";
echo"<english>";
 echo "</td>";
echo "</tr>";
}

//$sql="SELECT id,name,english FROM student";

 $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result))
{
 //echo"id:".$row["id"] . "name :".$row["name"]."english:".$row["english"]."<br>";

}
else
{
 echo"0 result";
}
 echo "fectched data successfully\n";

}
  

?>











