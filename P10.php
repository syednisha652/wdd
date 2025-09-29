<?php
$marks = [90, 70, 35];
foreach($marks as $m){
  if($m>=75) echo "First Class<br>";
  elseif($m>=60) echo "Second Class<br>";
  elseif($m>=40) echo "Third Class<br>";
  else echo "Fail<br>";
}
?>
