<?php
session_start();
include 'config.php';
echo "<html>";
echo "<body>";
$url=$_POST["1"];
echo "<table><form   action='add_site_details.php' method='POST'><tr><td>URL</td>";
echo "<td><input type='text' name='url' placeholder='cannot change from here' value='$url'></td></tr>";
$sql="SELECT * FROM detail WHERE url='$url'";
//$result=$db->query($sql);
$row=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($row);
if($row["username"]!="")
{	
	echo "<tr><td>Username</td>";
	$userid=$row["username"];
	echo "<td><input type='text' name='siteuser' id='siteuser'></td><td id='a'></td>";
}
else if($row["email"]!="")
{
	echo "<tr><td>Email</td>";
	$userid=$row["email"];
	echo "<td><input type='email' name='siteuser' id='siteuser'></td><td id='b'></td>";
}
else
{
	echo "<tr><td>Phone No</td>";
	$userid=$row["phone"];
	echo "<td><input type='text' name='siteuser' id='siteuser'></td><td id='3'></td>";
}

echo "</tr><tr><td>Password</td><td><input type='password' name='sitepass' id='sitepass'></td><td id='4'></td></tr><tr><td></td><td><input type='submit' value='SUBMIT' onclick='myfun()' name='confirm'></td>";
//$u=$_SESSION["Username"];
$variable= <<<eom
<script>
function myfun()
{
	var txt=document.getElementById("siteuser");
	if(txt="")
	{
		document.getElementById("a").inner="*Enter UserName";
	}
}
</script>
eom;
echo $variable;
echo "</tr></form></html>";
?>