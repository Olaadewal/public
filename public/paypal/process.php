<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the email and password here if needed
    // For example, you can use PHP's filter_var to validate the email.

    // Save the data to a text file
    $data = "Email: $email, Password: $password\n";
    $filename = 'data.txt';

    if (file_put_contents($filename, $data, FILE_APPEND | LOCK_EX)) {
        echo 'Data saved successfully.';
    } else {
        echo 'Error saving data.';
    }
}
?>
