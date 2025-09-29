<?php
echo "<table border=1>";
for($r=1;$r<=8;$r++){
 echo "<tr>";
 for($c=1;$c<=8;$c++){
   $color=($r+$c)%2==0?"black":"white";
   echo "<td style='width:30px;height:30px;background:$color'></td>";
 }
 echo "</tr>";
}
echo "</table>";
?>
