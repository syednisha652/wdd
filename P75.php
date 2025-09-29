<?php 
function appendLineToFile($filename, $newLine) { 
    $file = fopen($filename, "a"); 
    if ($file) { 
        fwrite($file, $newLine . "\n");  
        fclose($file); 
        echo "Line appended successfully to '$filename'.<br>"; 
    } else { 
        echo "Unable to open file: $filename<br>"; 
    } 
} 
$filename = "mydata.txt"; 
$newContent = "This is a newly added line."; 
appendLineToFile($filename, $newContent); 
echo "<b>Current contents of '$filename':</b><br>"; 
echo nl2br(file_get_contents($filename)); 
?>