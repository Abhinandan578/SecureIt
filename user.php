<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>First</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
ul#list li{
padding-top:6%;
font-size:150%;
font-family:calibre;
font-style: italic;
}
table#log tr,td{
  padding-bottom:3%;
padding-right:3%;
  text-align:center;
}
table#log{
  width:100%;
}
body
{
background-color:black;
color:white;
font-family: Perpetua,Baskerville,"Big Caslon","Palatino Linotype",Palatino,"URW Palladio L","Nimbus Roman No9 L",serif;
}
#logo{
  animation-name: example;
    animation-duration: 5s;
    animation-iteration-count: infinite;
}
@keyframes example {
    0%{transform:rotate(0deg);}
    49.4%{transform:rotate(0deg);}
    49.5%{transform:rotate(30deg);}
    51.5%{transform:rotate(-30deg);}
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
        <li class="active" id="home1"><a href="user.html">HOME</a></li>
        <li  id="lockit1"><a href="home2.php">WEB ACCOUNTS</a></li>
        <li id="inst1"><a href="user_detail_update.php">MY ACCOUNT</a></li> 
        <li id="myBtn"><a href="#">PASSWORD GENERATOR</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right" id="navy">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi! <?php echo $_SESSION["Username"]; ?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="myModal" class="modal" style="width: 20%;left:42%;">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <iframe src="#" style="border:none;" id="myframe"></iframe>
  </div>

</div>
<div style="height:device-height;background-color:white;margin-top:30px;width:100%;padding:0px;">
<div class="container" style="margin-top:0px;padding:0px;background-color:black;width:100%;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:0px;padding:0px;background-color:black;width:100%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="pic1.jpg" style="opacity:0.4;" alt="Chania" width="2000" height="100">
        <div class="carousel-caption">
          <h1>Reliable</h1>
          <h4 style="font-style:italic;">You may forget, But we remember!</h4>
        </div>
      </div>

      <div class="item">
        <img src="pic2.jpg" style="opacity:0.4;" alt="Chania" width="2000" height="100">
        <div class="carousel-caption">
          <h1>Fullproof</h1>
          <h4 style="font-style:italic;">Our double hash key encrypted datbase system provides full proof security to your accounts.</h4>
        </div>
      </div>
    
      <div class="item">
        <img src="pic3.jpg" style="opacity:0.4;" alt="Chania" width="2000" height="100">
        <div class="carousel-caption">
          <h1>Secured</h1>
          <h4 style="font-style:italic;">You can bank on us and believe that we won't fail your belief.</h4>
        </div>
      </div>
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
<div style="margin:0px;height:device-height;background-color: black
;">
<div id="LockIt" class="container" style="background-color:  black ;color:white;height:device-height;">
<ul id="list" style="list-style-type:square;">
<li>With our special encryption,keep your passwords safe and secure.Free yourself of all the hassles of remembering your long passwords.</li>
<li>We also provide you a smooth and effortless framework of single button sign in to various accounts of yours.</li>
<li>Your passwords are INVISIBLE to everyone even if you are logged in, with enhanced password security for access.</li>
<li>We provide you a double protection for your account with both email and otp verification required for any change in details.</li>
<li>Each login attempt requires an OTP validation from the registered mobile phone to thwart any unauthorised access.</li>
<li>We DON'T SEE your passwords! We follow end to end encryption and don't see, share or decrypt your passwords with any third party resource.</li>
</ul>  
</div>
<script>
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
function myfunction()
{
  document.getElementById("navigation").style.opacity="0.9";
  document.getElementById("navb").onclick = function(){myfunction1(); } ;
}
function myfunction1()
{
  document.getElementById("navigation").style.opacity="1";
  document.getElementById("navb").onclick = function(){myfunction(); } ;
}
function function1()
{
  document.getElementById("lockit1").className="active";
  document.getElementById("home1").className="#";
}
window.addEventListener('scroll', myFunc);
function myFunc() {
    if (document.body.scrollTop > 500| document.documentElement.scrollTop > 500) {
        document.getElementById("lockit1").className = "active";
   document.getElementById("home1").className = "#";
    }
else
{
  document.getElementById("home1").className = "active";
   document.getElementById("lockit1").className = "#";
    }
} 

</script>
</body>
</html>