<?php
session_start();

// Include Auth0 PHP SDK
require 'vendor/autoload.php';

use Auth0\SDK\Auth0;

// Auth0 Application Details
$auth0_domain = 'your-auth0-domain';
$auth0_client_id = 'your-auth0-client-id';
$auth0_client_secret = 'your-auth0-client-secret';
$auth0_redirect_uri = 'http://localhost/callback.php'; // Adjust to your redirect URI

// Initialize Auth0 SDK
$auth0 = new Auth0([
    'domain' => $auth0_domain,
    'client_id' => $auth0_client_id,
    'client_secret' => $auth0_client_secret,
    'redirect_uri' => $auth0_redirect_uri,
    'audience' => 'https://' . $auth0_domain . '/userinfo',
    'scope' => 'openid profile email'
]);

// Process callback
$auth0->process();

// Get user information if authenticated
$userInfo = $auth0->getUser();

if ($userInfo) {
    // Authentication successful, set session variables or store user data as needed
    $_SESSION['user_id'] = $userInfo['sub']; // Store Auth0 user ID or another unique identifier
    $_SESSION['email'] = $userInfo['email']; // Store user's email (optional)

    header("Location: ./panel/index.php"); // Redirect to secure page after successful login
    exit();
} else {
    // Handle authentication failure
    echo 'Authentication failed.';
}
?>
