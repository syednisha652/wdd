<?php 
$file = fopen("sample.txt", "w");  
if ($file) { 
    fwrite($file, "Hello, this is the first line.\n"); 
    fwrite($file, "This is the second line in the file.\n"); 
    fclose($file);  
    echo "<b>Data written to 'sample.txt' successfully.</b><br><br>"; 
} else { 
    echo "Unable to open file for writing.<br>"; 
    exit; 
} 
$file = fopen("sample.txt", "r"); // Open file in read mode 
if ($file) { 
    echo "<b>Reading file line-by-line with fgets():</b><br>"; 
    while (!feof($file)) { // Loop until end of file 
        echo fgets($file) . "<br>"; 
    } 
    fclose($file); 
} else { 
    echo "Unable to open file for reading.<br>"; 
} 
echo "<br><b>Reading entire file with file_get_contents():</b><br>"; 
$content = file_get_contents("sample.txt"); 
echo nl2br($content); // nl2br() to keep line breaks in HTML 
?> 