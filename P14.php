<?php
if(isset($_POST['submit'])){
 echo "Thanks ".$_POST['name']." (".$_POST['email'].")";
}
?>
<form method="post">
<input type="text" name="name" placeholder="Name">
<input type="email" name="email" placeholder="Email">
<textarea name="msg" placeholder="Message"></textarea>
<input type="submit" name="submit">
</form>
