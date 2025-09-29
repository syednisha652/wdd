<?php
if(isset($_POST['submit'])){
 if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['msg']))
  echo "All fields required!";
 else echo "Submitted!";
}
?>
<form method="post">
<input name="name"><input name="email"><textarea name="msg"></textarea>
<input type="submit" name="submit">
</form>
