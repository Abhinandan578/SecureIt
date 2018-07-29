<?php session_start();
include'config.php';
include("web_encryption.php");
include("encryption.php");
$user='piyush2897';
//$user=$_SESSION["Username"];
$query="SELECT * FROM User_Details WHERE Username='$user'";
$res1=mysqli_query($db, $query);
$row=mysqli_fetch_assoc($res1);
//$masterpassword=$row['Password'];
$masterpassword=mc_decrypt($row["Password"],ENCRYPTION_KEY);
?>


<html>
<head>
  <title>Sign_Up page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
  background-color: white;
  font-family: perpetua;
}
ul#list li{
padding-top:6%;
font-size:150%;
font-family:calibre;
font-style: italic;
}
.row{
  padding-bottom:3%;
padding-right:3%;
  text-align:center;
  color:white;
}
table#log{
  width:100%;
  background-color: #233736;
}
#logo{
  animation-name: example;
    animation-duration: 5s;
    animation-iteration-count: infinite;
}
@keyframes example {
    0%{transform:rotate(0deg);}
    49.4%{transform:rotate(0deg);}
    49.5%{transform:rotate(45deg);}
    51.5%{transform:rotate(-45deg);}
    51.6%{transform:rotate(0deg);}
    100% {transform:rotate(0deg);}
}
table#sign
{
 height:100%;background-color:white;opacity:0.7;border-radius:5%;
}
table#sign td,tr
{
padding:3%;
border:0px solid grey;
color:black;
}
.butt{
  border:2px solid grey;
  opacity:0.9;
  color:white;
  background-color: black;
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
<body>
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
        <li id="home1"><a href="user.html">HOME</a></li>
        <li id="lockit1"><a href="home2.php">WEB ACCOUNTS</a></li>
        <li class="active" id="inst1"><a href="#">MY ACCOUNT</a></li> 
        <li id="myBtn"><a href="#">PASSWORD GENERATOR</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right" id="navy">
        <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Hi! <?php echo $_SESSION["Username"]; ?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Logout <span class="caret"></span></a>
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
<div class="container" style="text-align:center;font-style:italic;font-size:300%;opacity:1;margin-top:100px;color:white;margin-bottom:63px;">
SECUREIT
</div>

<div style="margin-left:100px;">
<form action="update_userdetail_db.php" method="post">
<table >
<tr><td>FIRST NAME</td><td>
<input class="butt" type="text" name="fname" placeholder="First Name" value="<?php echo $row['First_Name'] ?>">
</td></tr><tr><td>LAST NAME</td><td>
<input  class="butt" type="text" name="lname" placeholder="Last Name"  value="<?php echo $row['Last_Name'] ?>">
</td><tr><td>PHONE NUMBER</td><td>
<input  class="butt" type="number" name="phn_num" placeholder="Phone Number" length="10" value="<?php echo $row['Phone_No'] ?>"></td></tr><tr><td>E-MAIL</td><td>
<input  class="butt" type="email" name="email" placeholder="E-mail Address" value="<?php echo $row['Email_Id'] ?>">
</td></tr><tr><td>PASSWORD</td><td>
<input class="butt"  type="<?php echo $type ?>" name="password" placeholder="Password" value="<?php echo $masterpassword ?>" >
<tr><td></td><td><input type="submit" value="confirm"></td></tr>
</td></tr>
</table>
</form>
</div>
<div style="margin-top:5.5%;margin-bottom:0px;background-color:black;color:white;text-align:center;font-size:150%;position:fixed;bottom:0px;width:100%;">
<span class="glyphicon glyphicon-copyright-mark" style="margin-top:0%;"></span><span style="margin-top:0;"> Copyright @ AAP Studio of Creation ;)</span>
</div>
<script type="text/javascript">
  
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
