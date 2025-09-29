<h2>Quiz Application</h2>
<form method="post">
 Q1:What is the capital of France?<br><br>
 <input type="radio" name="q1" value="Paris" required>Paris<br>
 <input type="radio" name="q1" value="Berlin">Berlin<br>
 <input type="radio" name="q1" value="Italy">Italy<br>
 Q2:What is 2+2?<br><br>
 <input type="radio" name="q2" value="4" required>4<br>
 <input type="radio" name="q2" value="3">3<br>
 <input type="radio" name="q2" value="8">8<br>
 <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
 $correct=['q1'=>'Paris','q2'=>'4'];
 $user=['q1'=>$_POST['q1'],'q2'=>$_POST['q2']];
 $score=0;
 foreach($user as $q=>$ans){
   if($ans==$correct[$q])$score++;}
 echo"<h3>Result:$score/2</h3>";
}
?>
 

 
 

 
