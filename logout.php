<!-- <?php   
// session_start(); //to ensure you are using same session
// // session_destroy(); //destroy the session
// header("location: http://localhost/website/index.html"); //to redirect back to "index.php" after logging out
// exit();
?> -->
<?php
  session_start();
  unset($_SESSION['Username']);
  //include("redirect_to_index.php");
  
?>