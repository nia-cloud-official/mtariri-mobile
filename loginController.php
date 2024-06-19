<?php
session_start();

// Replace these with your own database connection details
$servername = "localhost";
$username = "milto";
$password = "lola";
$dbname = "mtariri"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email and password
    $submitted_email = $_POST['email'];
    $submitted_password = $_POST['password'];

    // Prepare and bind
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $submitted_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        if ($submitted_password = $user_data['password']) {
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['email'] = $submitted_email;
            header("Location: ./panel/index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}

// Close connection
$conn->close();
