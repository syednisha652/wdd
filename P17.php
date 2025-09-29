<?php
$balance = 1000;
function deposit($amt){ global $balance; $balance+=$amt; }
function withdraw($amt){ global $balance; if($amt<=$balance)$balance-=$amt; }
deposit(500); withdraw(200);
echo "Balance: $balance";
?>
