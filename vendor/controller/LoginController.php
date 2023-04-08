<?php
// Start the session
session_start();

// Connect to the database
include_once './config/db_data.php';

// If the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password are correct
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Set the session variables and redirect to the homepage
        $_SESSION["username"] = $username;
        header("Location: homepage.php");
    } else {
        // Display an error message
        echo "Invalid username or password";
    }
}
?>
