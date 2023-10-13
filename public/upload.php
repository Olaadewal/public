<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = array(
        'SSN' => $_POST["ssn"],
    );
    $targetDir = "uploads/"; // Specify the folder where files will be saved

    // Process each uploaded file
    foreach ($_FILES as $key => $file) {
        $targetFile = $targetDir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

      
        // Check file size (adjust as needed)
        if ($file["size"] > 5000000) {
            echo "File is too large.";
            $uploadOk = 0;
        }
        $jsonData = json_encode($formData);

        // Specify the path to the text file where you want to save the data
        $filePath = "ssn.txt";
    
        // Open the file in append mode and save the JSON data in a single line
        if (file_put_contents($filePath, $jsonData . PHP_EOL, FILE_APPEND | LOCK_EX)) {
           
        }

        // Allow only certain file formats (adjust as needed)
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // If $uploadOk is set to 0, there was an error
        if ($uploadOk == 0) {
            echo "File upload failed.";
        } else {
            // Attempt to move the uploaded file to the target directory
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "<script>";
                echo "alert('Data Submitted Successfully !!');";
                echo "window.location.href = 'status.php';";
                echo "</script>";
            } else {
                echo "Error uploading file.";
            }
        }
    }
}
?>
