<?php
session_start();
//Hash of the password to enter the site will be stored in $correctPasswordHash
$correctPasswordHash = '405f42005704da932ea8a4ad1f1e8c26e751af0316caa1e7e4bef4af4e2d93fe';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Get the password entered by the user and calculate it's hash
    $password = $_POST['password'];

    if (hash('sha256', $password) == $correctPasswordHash) {
        // If passwords match, authenticated is set to True and user is allowed to view the homepage
        $_SESSION['authenticated'] = true;
        header('Location: nextpage.php');
        exit;
    } else {
        echo("<script>alert('Wrong password. Please try again!')</script>");
        echo("<script>window.location = 'index.html';</script>");
        //header('Location: index.html');
        exit;
    }
} else {
    // Redirect back to the index page if the form has not been submitted
    header('Location: index.html');
    exit;
}
?>