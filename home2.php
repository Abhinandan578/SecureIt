<?php 
session_start();
include 'config.php';
include("web_encryption.php");
include("encryption.php");

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
#add{
  right:25%;
  top:33%;
}
  #logo{
  animation-name: example1;
    animation-duration: 5s;
    animation-iteration-count: infinite;
}
@keyframes example1 {
    0%{transform:rotate(0deg);}
    49.4%{transform:rotate(0deg);}
    49.5%{transform:rotate(45deg);}
    51.5%{transform:rotate(-45deg);}
    51.6%{transform:rotate(0deg);}
    100% {transform:rotate(0deg);}
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

</head>
<body >
<nav class="navbar navbar-inverse navbar-fixed-top" id="navigation" style="margin-top:0px;padding:0px;font-family:jokerman;">
  <div class="container-fluid" style="margin-top:0px;" id="navi3">
    <div class="navbar-header" style="margin-top:0;padding-top:0;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myfunction()" id="navb">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"  style="margin-top:0px;"  style="padding-top:0;"><img class="img-responsive" id="logo" src="logo.png" width=33px height=30px;></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id ="navy">
        <li id="home1"><a href="user.php">HOME</a></li>
        <li class="active" id="lockit1"><a href="home2.php">WEB ACCOUNTS</a></li>
        <li id="inst1"><a href="user_detail_update.php">MY ACCOUNT</a></li> 
        <li id="myBtn"><a href="#">PASSWORD GENERATOR</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right" id="navy">
        <li><span class="glyphicon glyphicon-user"></span> Hi! <?php echo $_SESSION["Username"]; ?></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">Logout </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <iframe src="#" style="border:none;" id="myframe"></iframe>
  </div>
  </div>
<div class="container" style="margin-top:80px;">
  
  <button class="btn btn-success btn-md" style="position:fixed;bottom:35px;right:60px;background-color:rgba(255,255,255,1.0);border-radius:50%;opacity:0.5;border:2px solid blue;">
    <span class="glyphicon glyphicon-plus" style="color:blue;" id="add1"></span>
  </button>
</div>
<div id="demo" style="left:40%;top:45%;position:fixed;visibility:hidden;z-index: 2;">
  <span style="position:fixed; width:1.5%;height:2.5%;left:40%;top:45%;" onclick="document.getElementById('demo').style.visibility='hidden'" class="glyphicon glyphicon-remove" id="add"></span>
<iframe id="myframe" name="myframe" src="#" width=100% height=25% style="background-color: white;top:40%;right:60%;z-index: 3;"></iframe>
</div>
<?php
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
      echo "<div class='col-sm-3' style='float:left;padding-bottom:25px;background-color:rgba(0,0,0,0.2);color:white;margin:25px;height:250px;border-radius:8px;'><table style='color:white;background-color:#E18A07;height:100%;margin:5px;width:100%;'><tr><td>URL:</td><td>";
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
  //document.getElementById('myframe').src="index.html";
  document.getElementById('demo').style.visibility="visible";
}
$(document).ready(function(){
    $('.btn').popover({title: "<form action='fill_site_detail.php' method='post' target='myframe'> <table id='list' style='padding:0;margin:0'><tr><td><input type='image' src='amazon.jpg' name='1' value='www.amazon.in' onclick='myFunction()' style='padding:0;margin-top:2;margin-left:0;width:100%;height:35px;'></td></tr><tr><td><input type='image' src='fb.png' name='1' value='www.facebook.com' onclick='myFunction()' style='padding:0;margin-top:2;width:100%;height:35px;'></td></tr><tr><td><input type='image' name='1' value='www.github.com' onclick='myFunction()' src='github.jpg' style='padding:0;margin:0;width:100%;height:35px;'></td></tr><tr><td><input type='image' name='1' value='www.gmail.com' onclick='myFunction()' src='gmail.jpg' style='padding:0;margin-top:2;width:100%;height:35px;'></td></tr><tr><td><input type='image' name='1' value='www.yahoo.com' onclick='myFunction()' src='yahoo.jpg' style='padding:0;margin-top:2;width:100%;height:35px;'></td></tr><tr><td><input type='image' name='1' value='www.instagram.com' onclick='myFunction()' src='instagram.jpg' style='padding:0;margin-top:2;width:100%;height:35px;'><tr><td><input type='image' name='1' value='signin.ebay.in' onclick='myFunction()' src='ebay.png' style='padding:0;margin-top:2;width:100%;height:35px;'></td><tr><td><input type='image' name='1' value='www.tumblr.com' onclick='myFunction()' src='tumblr.png' style='padding:0;margin-top:2;width:100%;height:35px;'></td></tr></tr></td></tr></table></form>", html: true, placement: "top", trigger:"focus"}); 
});
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    document.getElementById('myframe').src="randompassword.php";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
