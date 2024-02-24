

 if(isset($_POST["delete"]))
 {
 $fname=$_POST["fname"];
 $sql3="SELECT fname FROM user WHERE fname='$fname'";
$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0)
{
$sql2="DELETE FROM user WHERE fname='$fname'";

//echo " $fname";
if(mysqli_query($conn,$sql2))
{
 echo"<br> deleted successfully";
}
else
{
 echo"error:".$sql2."<br>".mysqli_error($conn);
}}
else
{
 echo"no such rows<br>";
 //echo "<error:".$sql3."<br>".mysqli_error($conn);
}
}
