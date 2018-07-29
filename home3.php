<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  #nav{
    background-color:blue;
    width:8px;
    position:fixed;
    height:100%;
  }
  #nav:hover{
    width:180px;
  }
</style>

</head>
<body style="background-color:green;">
<div id="nav">

</div>
<div class="container">
  <button class="btn btn-success btn-md" style="position:fixed;bottom:35px;right:40px;background-color:rgba(255,255,255,1.0);border-radius:50%;opacity:0.5;border:2px solid blue;">
    <span class="glyphicon glyphicon-plus" style="color:blue;" id="add"></span>
  </button>
</div>
<div id="demo" style="top:30%;position:fixed;visibility:hidden;height:100%;" class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div style="top:30%;position:fixed; width:100%;height:2.5%;text-align:right;" onclick="document.getElementById('demo').style.visibility='hidden'" class="glyphicon glyphicon-remove"></div>
      <iframe id="myframe" src="index.html" width=100% height=250px style="opacity:0.6;overflow:hidden;"></iframe>

</div>
<div class="col-sm-4"></div>
</div>
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
  echo "<div>";
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
  echo "</div>";
}
?>

<script>
function myFunction() {
  document.getElementById('myframe').src="index.html";
  document.getElementById('demo').style.visibility="visible";
}
$(document).ready(function(){
    $('.btn').popover({title: "<form action='otp.php' target='myframe'> <table id='list'><tr><td><button type='submit'  onclick='myFunction()' >AMAZON</td></tr><tr><td><a href='#'>FACEBOOK</a></td></tr><tr><td><a href='#'>GITHUB</a></td></tr><tr><td><a href='#'>GOOGLE</a></td></tr><tr><td><a href='#'>YAHOO</a></td></tr></table>", html: true, placement: "top"}); 
});
function multiplyNode(node, count, deep) {
  var srcs=["pic1.jpg","pic2.jpg","pic3.jpg","pic1.jpg","pic2.jpg"];
    for (var i = 0, copy; i < count - 1;i++ ) {
        copy = node.cloneNode(deep);
        document.getElementById("im").src=srcs[i];
        
        node.parentNode.insertBefore(copy, node);
    }
}

multiplyNode(document.querySelector('.box'), 5, true);
</script>

</body>
</html>
