<?php 
session_start(); 
$_SESSION["username"] = "Dhanu"; 
$_SESSION["email"] = "dhanu@gmail.com"; 
echo "<h3>Session variables are set.</h3>"; 
echo "Username: " . $_SESSION["username"] . "<br>"; 
echo "Email: " . $_SESSION["email"] . "<br>"; 
session_unset(); 
echo "<h3>After session_unset():</h3>"; 
var_dump($_SESSION);  
session_destroy(); 
echo "<h3>Session destroyed.</h3>"; 
?> 