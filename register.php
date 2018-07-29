<!DOCTYPE html>
<html>
<head>
	<title>Sign_Up page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	background-image: url("signup.jpg");
	background-size: cover;
	font-family: perpetua;
}
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
	color:white;
}
table#log{
	width:100%;
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
  color:black;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navigation" style="margin-bottom:0px;padding:0px;font-family:jokerman;">
  <div class="container-fluid" style="margin-top:0px;" id="navi3">
    <div class="navbar-header" style="margin-top:0;padding-top:0;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myfunction()" id="navb">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.html"  style="margin-top:0px;"  style="padding-top:0;"><img class="img-responsive" id="logo" src="logo.png" width=30px height=30px;></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id ="navy">
        <li class="active" id="home1"><a href="index.html">Home</a></li>
        <li id="lockit1"><a href="index.html#LockIt" onclick="function1()">LockIt</a></li>
        <li id="inst1"><a href="index.html#Instant Messaging">Instant Messaging</a></li> 
        <li id="security1"><a href="index.html#Security">Security</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right" id="navy">
        <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="caret"></span></a>
          <ul class="dropdown-menu" style="text-align:center;background-color:rgba(0,0,0,0.3);">
            <li>
              <form action="logincopy.php" method ="POST" style="color:white;">
                <fieldset>
                	<legend style="color:white;">Login</legend>
                	<table id="log">
                  	<tr>
                    	<td>Username</td>
                    	<td><input type="text" name ="uname" style="color:black;"></td>
                  	</tr>
                  	<tr>
                    	<td>Password</td>
                    	<td><input type="password" name="password" style="color:black;"></td>
                  	</tr>
                  	<tr>
                  	 <td colspan="2"><input type="submit" value="Login" name="login" style="background-color:black;"></td>
                  	</tr>
                  	<!-- <tr>
                    	<td>OTP</td>
                    	<td><input type = "password" name="passotp"></td>
                  	</tr> -->
                	</table>
                </fieldset>
               <!--  <b>Don't have an account?</b> <a href="register.php"><span id="sign_up">Sign Up</span></a> -->
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="text-align:center;font-style:italic;font-size:300%;opacity:1;margin-top:100px;color:white;margin-bottom:63px;">
SECUREIT
</div>
<div class="container" style="margin-bottom:50px;">
<div class="row">
<div class="col-sm-6">
</div>
<div class="col-sm-6" style="text-align:center;">
<form action="sign_up.php" method="POST" style="text-align:right;">
<fieldset>
<div  class="table-responsive" style="max-width:75%;background-color:beige;opacity:0.7;border-radius:5px;color:black;">
<form action="fill_user_detail.php" method="POST">
	<table id="sign" class="table" style="border:0px solid grey;background-color:beige;opacity:0.9;">
		<tr>
			<td><input class="butt" type="text" name="fname" placeholder="First Name"></td>
			<td><input  class="butt" type="text" name="lname" placeholder="Last Name"></td>
		</tr>
		<tr>
			<td><input  class="butt" type="number" name="phn_num" placeholder="Phone Number" length="10"></td>
		</tr>
		<tr>
			<td><input  class="butt" type="email" name="email" placeholder="E-mail Address"></td>
		</tr>
		<tr>
			<td><input  class="butt" type="text" name="uname" placeholder="Username"></td>
		</tr>
		<tr>
			<td><input class="butt"  type="password" name="password" placeholder="Password"></td>
			

		</tr>
		
	</table>
 </form> 
	<p style="text-align:center;"><input type="submit" value="Register" name="register" ></p>
</div>
</fieldset>
</form>
</div>
</div>
</div>
<div style="margin-top:5.5%;margin-bottom:0px;background-color:black;color:white;text-align:center;font-size:150%;">
<span class="glyphicon glyphicon-copyright-mark" style="margin-top:0%;"></span><span style="margin-top:0;"> Copyright @ AAP Studio of Creation ;)</span>
</div>
</body>
</html>
