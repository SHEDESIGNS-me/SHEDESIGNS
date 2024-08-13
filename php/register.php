<?php
// Start a session to store the user's login status
session_start();

// Check if the user is already logged in, redirect to the blog if logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  header('Location: blog.php');
  exit;
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perform the registration process (You can add validation and store the user data in a database)
  // For simplicity, we are not handling the actual registration process in this example.
  
  // After successful registration, set the login status to true and redirect to the blog
  $_SESSION['loggedin'] = true;
  header('Location: blog.php');
  exit;
}
?>