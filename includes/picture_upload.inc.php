<?php

// Set the file
$fileName = $_FILES['upload_profilepicture']['name'];
$fileTmpName = $_FILES['upload_profilepicture']['tmp_name'];
$fileSize = $_FILES['upload_profilepicture']['size'];
$fileError = $_FILES['upload_profilepicture']['error'];
$fileType = $_FILES['upload_profilepicture']['type'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
// Lists an array of file extensions allowed in the website
$allowedExt = array('jpg', 'jpeg');

// Checks the file's extension and size.
// If the file conforms to all of the checks, it will be uploaded.
if (in_array($fileActualExt, $allowedExt)) {
    if ($fileError == 0) {
        if ($fileSize < 5000000) {

            $fileNameNew = $fullname . "." . $fileActualExt;
            $fileDestination = '../profile-pic/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        
            //header("Location: ../index.php?upload=success");

        } else {
            echo "Your file is too big.";
        }
    } else {
        echo "There was an error uploading your file.";
    }
} else {
    echo "Error: You cannot upload files of this type.";
}
    
    
?>
