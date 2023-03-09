<?php
session_start();

// Set the correct password (in hashed format)
$correctPasswordHash = '405f42005704da932ea8a4ad1f1e8c26e751af0316caa1e7e4bef4af4e2d93fe';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the password entered by the user
    $password = $_POST['password'];

    // Hash the password entered by the user
    $passwordHash = hash('sha256', $password);

    // Check if the password entered by the user matches the correct password hash
    if ($passwordHash === $correctPasswordHash) {
        // Set the authenticated session variable
        $_SESSION['authenticated'] = true;

        // Redirect to the next page
        header('Location: nextpage.php');
        exit;
    } else {
        // Redirect back to the index page if the password is incorrect
        header('Location: index.html');
        exit;
    }
} else {
    // Redirect back to the index page if the form has not been submitted
    header('Location: index.html');
    exit;
}
?>