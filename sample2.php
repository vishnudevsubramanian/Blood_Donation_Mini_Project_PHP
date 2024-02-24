<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad","Ernakulam","alapuzha","kollam","wayanad","kannur","kasarkode","idukki","kottayam","pathanamthitta","kozhikode","thrissur","malapuram"],
"Goa": ["North Goa", "South Goa"],

}
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
</head>
<body bgcolor="skyblue">
<marquee>
<font color="red" size="20">Warning: Do not pay any amount to any person promising supply of blood packets or arranging donors. </font></marquee>
<center>
<form name="myform" id="myForm"  action="<?php $_PHP_SELF ?>" method="POST">
<table border="2"><tr>
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
</tr><tr><td>
Select Country: </td><td><select name="state" id="countySel" size="1">
<option value="" selected="selected">Select Country</option>
</select></td></tr>
<tr><td>
Select State: </td><td><select name="countrya" id="stateSel" size="1">
<option value="" selected="selected">Please select Country first</option>
</select></td></tr>
<tr><td>
Select District: </td><td><select name="district" id="districtSel" size="1">
<option value="" selected="selected">Please select State first</option>
</select></td></tr>
<tr><td colspan="2">
<input type="submit" name="sub"></td></tr></table>

</form>
</center>
</body>
</html>
<?php
if(isset($_POST["sub"]))
{
   $blood = $_POST["group"];
   $country = $_POST["state"];
  if($blood == "" || $country == "")
{
Echo("Missing Information!");
}else{
//Echo("Success!");
header("Location:page2.php");
}
}

?>
   



	
