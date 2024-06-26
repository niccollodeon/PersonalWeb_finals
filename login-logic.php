<?php 
session_start(); // Start session to manage user session data
include "connect.php"; // Include file for database connection

// Check if password is submitted via POST
if (isset($_POST['password'])) {
    
    // Function to sanitize and validate input data
    function validate($data) {
        $data = trim($data); // Remove whitespace from beginning and end
        $data = stripslashes($data); // Remove backslashes
        $data = htmlspecialchars($data); // Convert special characters to HTML entities
        return $data; // Return sanitized data
    }

    // Sanitize and validate password input
    $pass = validate($_POST['password']);

    // Check if password is empty
    if (empty($pass)) {
        header("Location: login.php?error=Password is required"); // Redirect with error message
        exit(); // Stop further script execution
    }

    // Fixed user_ID
    $user_ID = 1;

    // Prepare SQL query to select user with matching user_ID and password
    $sql = "SELECT * FROM users WHERE user_ID = ? AND user_pass = ?";
    $stmt = mysqli_prepare($con, $sql);

    // Check if statement preparation was successful
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($con))); // Output error message
    }

    mysqli_stmt_bind_param($stmt, "is", $user_ID, $pass);

    // Execute prepared statement
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if exactly one row is returned (indicating valid credentials)
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result); // Fetch associative array of the user data
        // Verify password matches
        if ($row['user_pass'] === $pass) {
            // Set session variables to store user data
            $_SESSION['user_ID'] = $row['user_ID'];
            $_SESSION['login_success'] = true; // Set login success flag
            header("Location: crud.php"); // Redirect to CRUD page
            exit(); // Stop further script execution
        } else {
            header("Location: login.php?error=Incorrect password"); // Redirect with error message
            exit(); // Stop further script execution
        }
    } else {
        header("Location: login.php?error=Incorrect password"); // Redirect with error message
        exit(); // Stop further script execution
    }
} else {
    header("Location: login.php?error=Password is required"); // Redirect with error message
    exit(); // Stop further script execution
}

?>
