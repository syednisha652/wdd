<h2>Conference Registration</h2>
<form method="post">
 Name:<input type="text" name="name"><br>
 Email:<input type="text" name="email"><br>
 Organization:<input type="text" name="organization"><br>
 Select Sessions:<br>
  <select name="sessions[]"multiple required>
  <option>Conference1-Topic1</option> 
  <option>Conference2-Topic2</option> 
  <option>Conference3-Topic3</option>
  </select>
 <input type="submit" name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit'])){
 echo "<h3>Registration Details</h3><br>";
 echo "Name:".$_POST['name']."<br>";
 echo "Email:".$_POST['email']."<br>";
 echo "Organization:".$_POST['organization']."<br>";
 echo "Sessions:<ul>";
 foreach($_POST['sessions'] as $s) echo "<li>$s</li>";
 echo "</ul>";
}
?>

  

