<?php
if(isset($_POST['submit'])){
  if(empty($_POST['name'])){
    echo "Please enter your name!";
  }else{
    echo "Hello, Welcome to Everyone!<br>Have a nice day!!";
  }
}
?>
<form method="post">
<input type="text" name="name">
<input type="submit" name="submit">
</form>
