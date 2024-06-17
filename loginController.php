<?php
// loginController.php
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
    // Get the submitted email and password
    $submitted_email = $_POST['email'];
    $submitted_password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $submitted_email);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if a user with the submitted email exists
    if ($stmt->num_rows > 0) {
        // Bind result variables
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify the submitted password with the hashed password from the database
        if (password_verify($submitted_password, $hashed_password)) {
            // Password is correct, set the session variable
            $_SESSION['user_id'] = $user_id;

            // Redirect to the protected page
            header("Location: protected_page.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password.";
        }
    } else {
        // Email doesn't exist
        echo "No user found with that email.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
