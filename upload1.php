<?php
$targetDirectory = "uploads/";

if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); 
}
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

echo '<div style="text-align: center; margin-top: 50px;">';  

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "<p>The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.</p>";
} else {
    echo "<p>Sorry, there was an error uploading your file.</p>";
}

echo '</div>'; 
?>
