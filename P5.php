<?php
$p1=50;$q1=2; $p2=30;$q2=3; $p3=20;$q3=5;
$subtotal = $p1*$q1 + $p2*$q2 + $p3*$q3;
$tax = $subtotal*0.10;
$total = $subtotal + $tax;
echo "Subtotal: $subtotal<br>Tax: $tax<br>Total: $total";
?>
