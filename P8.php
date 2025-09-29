<?php
function deal($cost,$size){ return $cost/$size; }
$a = deal(25,11);
$b = deal(23,9);
echo ($a<$b)?"Drink A is cheaper":"Drink B is cheaper";
?>
