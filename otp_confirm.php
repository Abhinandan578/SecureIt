<?php
session_start();
echo "<form action='Welcome_check.php' method='POST'>";
echo "<table style='border:1px solid black;top:30%;left:35%;'>";
echo "<tr>Enter Your Otp Here</tr>";
echo "<tr>";
echo "<td><input type='password' name='otp'></td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type='Submit' name='Confirm' Value='Confirm OTP'></td>";
echo "</tr>";
echo "</table>";
echo $_SESSION["OTP"];
?>