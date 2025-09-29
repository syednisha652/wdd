<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$fileName = $_FILES["myfile"]["name"]; 
$fileTmp  = $_FILES["myfile"]["tmp_name"]; 
$fileExt  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); 
$allowedExt = ["jpg", "jpeg", "png"]; 
if (!in_array($fileExt, $allowedExt)) { 
echo "<h3 style='color:red;'>Error: Only JPG and PNG files are allowed!</h3>"; 
} else { 
if (move_uploaded_file($fileTmp, "uploads/" . $fileName)) { 
            echo "<h3 style='color:green;'>File uploaded successfully!</h3>"; 
        } else { 
            echo "<h3 style='color:red;'>Error uploading file.</h3>"; 
        } 
    } 
} 
?> 
<form method="post" enctype="multipart/form-data"> 
    <label>Select image (JPG or PNG only):</label><br><br> 
    <input type="file" name="myfile" required> 
    <br><br> 
    <input type="submit" value="Upload"> 
</form> 