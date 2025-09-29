<h2>Regular Expression<h2>
<form method="post">
 Enter string:<input type="text" name="input_txt"><br>
 <input type="submit" value="submit">
</form>

<?php
 if(isset($_POST['input_txt'])){
  $txt=$_POST['input_txt'];
  echo "<h3>Applied Regular Expression</h3><br>";
  if(preg_match('/^[a-zA-Z0-9]+$/',$txt))
   echo "<p>Input contains only Letters and Numbers</p>";
  else 
   echo "<p>Input contains characters other than Letters and Numbers</p>";
  preg_match_all('/[a-zA-Z]/',$txt,$m);
  echo "<p>Letters found:".implode(",",$m[0])."</p>"; 
  echo "spaces replaced as underscore:".preg_replace('/\s+/','_',$txt)."</p>";
  echo "split into characters:".implode(",",preg_split('//u',$txt,-1,PREG_SPLIT_NO_EMPTY))."</p>";
}
?>	


