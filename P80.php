<?php 
setcookie("TestCookie", "HelloCookie", time() + 3600, "/");  
if (isset($_COOKIE["TestCookie"])) { 
echo "TestCookie Value: " . $_COOKIE["TestCookie"]; 
} 
else 
{ 
echo "TestCookie has been set. Please refresh the page to see its value."; 
}
?>