<?php
// registerController.php
session_start();

// Replace these with your own database connection details
$servername = "localhost";
$username = "milto";
$password = "lola";
$dbname = "mtariri";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $min =  1; 
    $max = 255;
    $ranna = rand($min,$max);
    $query = "INSERT INTO users (id, username, phone, email, user_id, password, created_at) VALUES ('', $username, $phone, $email, $ranna, $password, '')";
    mysqli_commit($conn);
}
$conn->close();
?>
