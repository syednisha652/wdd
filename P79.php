<?php 
$file1 = "test.txt"; 
$file2 = "test2.txt"; 
$outputFile = "output.txt"; 
$content1 = file_get_contents($file1); 
$content2 = file_get_contents($file2); 
$fp = fopen($outputFile, "a"); 
fwrite($fp, $content1 . PHP_EOL);  
fwrite($fp, $content2 . PHP_EOL);  
fclose($fp); 
echo "Files appended successfully to $outputFile"; 
?> 