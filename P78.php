<?php 
if (!isset($_COOKIE["username"])) { 
setcookie("username", "Dhanuja", time() + 3600, "/");  
echo "Cookie 'username' is set with value 'lakshmisree'. Please refresh the page.<br>"; 
} else { 
echo "Cookie Value: " . $_COOKIE["username"] . "<br>"; 
setcookie("username", "", time() - 3600, "/"); 
echo "Cookie 'username' has been deleted.<br>"; 
} 
?>