<h2> Course Registration </h2>
<form method="get">
Name:<input type="text" name="name"><br><br>
SSLC Mark:<input type="number" name="sslcmrk"><br><br>
HSC Mark:<input type="number" name="hscmrk"><br><br>
Course:<select name="course">
 <option>Computer Science</option>
 <option>Computer Science with AI</option>
 <option>Computer Science with CyberSecurity</option>
 <option>Computer Science with IT</option>
</select><br><br>
<input type="submit" name="submit"  value="Register">
</form>

<?php
if(isset($_GET["submit"])){
 echo "<h3>Registration Details</h3><br>";
 echo "Name:".$_GET["name"]."<br>";
 echo "SSLC Mark:".$_GET["sslcmrk"]."<br>";
 echo "HSC Mark:".$_GET["hscmrk"]."<br>";
 echo "Course:".$_GET["course"];
}
?>




 
