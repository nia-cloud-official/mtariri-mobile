<?php
// registerController.php
session_start();

// Replace these with your own database connection details
$servername = "localhost";
$username = "milto";
$password = "lola";
$dbname = ""; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted registration data
    $email = $_POST['email'];
    $password = $_POST['password']; // Note: You should hash this password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hashing the password

    // You can add more fields from your registration form here
    // For example:
    // $username = $_POST['username'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
