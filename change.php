<?php
session_start();
include 'config.php';
$user=$_SESSION["Username"];
$username=$_POST["1"];
$password=$_POST["2"];
$url     =$_POST["3"];
$sql="UPDATE web_accounts SET Site_Username='$username', Site_Password='$password' WHERE Username='$user'";
$result=$db->query($sql);
if($result)
{
	echo "QUERY SUCcessfull";
	echo "redirect me";
}
?>