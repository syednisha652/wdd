<?php
function isLeap($y){
 return ($y%4==0 && $y%100!=0) || ($y%400==0);
}
echo isLeap(2024)?"Leap":"Not Leap";
?>
