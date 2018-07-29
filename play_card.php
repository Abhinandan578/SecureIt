<?php
session_start();
include 'config.php';
include("web_encryption.php");
include("encryption.php");
//$user=$_SESSION["Username"];
$user='piyush2897';
$sql="SELECT * FROM web_accounts WHERE Username='".$user."'";
$row=mysqli_query($db,$sql);
$row1=mysqli_fetch_assoc($row);
$cnt=mysqli_num_rows($row);
//$query1="SELECT Password FROM User_Details WHERE Username='".$_SESSION['Username']."'";
$query1="SELECT Password FROM User_Details WHERE Username='".$user."'";
		$res1=mysqli_query($db, $query1);
		$row2=mysqli_fetch_assoc($res1);
		//echo $row2["Password"];
		$key=mc_decrypt($row2["Password"],ENCRYPTION_KEY);
		$key=strToHex($key);
		// echo $key;
		$password=generate_secret_key1($key);
		$pass=length_check32($password);
		// echo ($pass);
if($cnt<=0)
{
	echo "YOU DON'T HAVE ANY ACCOUNT SAVED IN THIS WEBSITE";
}
if($cnt>0){
	$i=1;
	echo "<html><body><div>";
	 	while($cnt--){
			$table=array();
			$table["url"]=$row1["URL"];
			$table["site_user"]=$row1["Site_Username"];
			$table["site_pass"]=$row1["Site_Password"];
			echo "<div style='float:left;padding-bottom:25px;background-color:white;margin:25px;'><table><tr><td>URL:</td><td>";
			echo $table["url"];
			echo "</td><tr><td>Username:</td><td>";
			echo $table["site_user"];
			echo "</td><tr><td>Password:</td><td>";
			// echo $table['site_pass'];
			$site_password=mc_decrypt($table['site_pass'],$pass);
			echo $site_password;
			echo "</td></tr></table></div>";
			$row1=mysqli_fetch_assoc($row);
			$i++;
	}
	echo "</div></body></html>";
}
?>
