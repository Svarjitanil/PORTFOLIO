<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize the input to prevent SQL injection (you can use better sanitization methods based on your setup)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Perform the selection query using the user input (assumes you have a table named 'users' with 'username' and 'password' columns)
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, you can perform the login action here
        // For example, you can set session variables or redirect to a dashboard page
        echo "Login successful!"; // Replace this with your desired action
        header('location:webpage.php');
    } else {
        // User not found or incorrect credentials
        echo "Invalid username or password."; // Replace this with your desired action
    }
}

$conn->close();
?>
