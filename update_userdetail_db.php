<?php 
session_start();
include'config.php';
include("web_encryption.php");
include("encryption.php");
//$user=$_SESSION["Username"];
$user='piyush2897';
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phn_num"];
$pass=mc_encrypt($_POST["password"],ENCRYPTION_KEY);
//echo $firstname;
$sql="UPDATE User_Details SET First_Name='$firstname',Last_Name='$lastname',Email_Id='$email',Password='$pass',Phone_No='$phone' WHERE Username='$user'" ;
$result=$db->query($sql);
if($result)
{
	echo "query successfull";
	echo "<script>window.location = 'home4.php' ;</script>";
}
?>