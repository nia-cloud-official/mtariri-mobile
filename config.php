<?php
// Start session
session_start();
$_SESSION['user_name'] = "";

// Define database connection parameters
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'milto');
define('DB_PASSWORD', 'lola');
define('DB_NAME', 'mtariri');

// Try to connect to the database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Site settings
define('SITE_NAME', 'My Mtariri');
define('BASE_URL', 'http://.com');

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Email configuration (if needed)
define('EMAIL_FROM', 'noreply@yourdomain.com');
define('EMAIL_FROM_NAME', 'Your Site Name');
define('SMTP_HOST', 'smtp.yourdomain.com');
define('SMTP_USERNAME', 'your_smtp_username');
define('SMTP_PASSWORD', 'your_smtp_password');
define('SMTP_PORT', 587);
define('SMTP_ENCRYPTION', 'tls'); // or 'ssl'

// Security settings
define('PASSWORD_HASH_ALGO', PASSWORD_DEFAULT); // Algorithm used for password hashing
define('SESSION_TIMEOUT', 3600); // Session timeout in seconds (1 hour)

// Function to connect to the database (optional)
function get_db_connection() {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to check if a user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Function to redirect to login page if not logged in
function check_login() {
    if (!is_logged_in()) {
        header("Location: login.php");
        exit();
    }
}

define('site_url',  "http://localhost/mtariri-mobile/");

function redirect($url) {
    header("Location". $url);
    return 0;
}
// Function to send an email (using PHPMailer)
function send_email($to, $subject, $body) {
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_ENCRYPTION;
    $mail->Port = SMTP_PORT;

    $mail->setFrom(EMAIL_FROM, EMAIL_FROM_NAME);
    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    if(!$mail->send()) {
        return 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return 'Message has been sent';
    }
}

?>
