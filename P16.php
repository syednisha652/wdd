<?php
function add($a,$b){ return $a+$b; }
if(isset($_POST['submit'])){
  echo add($_POST['n1'],$_POST['n2']);
}
?>
<form method="post">
<input name="n1"><input name="n2">
<input type="submit" name="submit">
</form>
