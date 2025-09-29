<!DOCTYPE html>
<html>
<head><title>Bank Transaction</title></head>
<body>
<form method="post">
Initial Balance:<input type="number" name="initialBalance" required><br><br>
No Of Transactions:<input type="number" name="numTransactions" required><br><br>
Type:<select name="transactionType">
  <option value="deposit">Deposit</option>  
  <option value="withdraw">withdraw</option>
</select><br><br>
Amount:<input type="number" name="amount" required><br><br>
<input type="submit" value="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$bal=$_POST["initialBalance"];
$n=$_POST["numTransactions"];
$type=$_POST["transactionType"];  
$amt=$_POST["amount"];
echo"<h3>Result:</h3>Initial Balance:$bal<br>";
for($i=1;$i<=$n;$i++){
 if($type=="deposit"){
    $bal+=$amt;
    echo"Transaction $i: +$amt<br>";}
 elseif($type=="withdraw"){
  if($amt<=$bal){
    $bal-=$amt;
    echo"Transaction $i: -$amt<br>";}
  else
    echo"Insufficient Fund!<br>";
 }
}
echo "Final Balance: $bal";
}
?>
</body>
</html>