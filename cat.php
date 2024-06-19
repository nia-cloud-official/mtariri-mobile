<?php
require 'vendor/autoload.php'; // Include Composer autoload

use Auth0\SDK\Auth0;

$auth0_domain = 'dev-wrh7coca2wqafeeq.us.auth0.com';
$auth0_client_id = 'FqyTfzpsAqbEUA48hOk60XdDqgVQdfAZ';
$auth0_client_secret = '7xycXWAVc3iZWhm3jsCeUkX3KbhiD1dCAeXRsjW0mz3FZQT8mnM5QzXL1DoYBdeB';
$auth0_redirect_uri = 'http://localhost/callback.php'; // Adjust to your redirect URI

$auth0 = new Auth0([
    'domain' => $auth0_domain,
    'client_id' => $auth0_client_id,
    'client_secret' => $auth0_client_secret,
    'redirect_uri' => $auth0_redirect_uri,
    'audience' => 'https://' . "https://dev-wrh7coca2wqafeeq.us.auth0.com/api/v2/" . '/userinfo',
    'scope' => 'openid profile email'
]);

// Example usage:
$login_url = $auth0->login(); // Get login URL for Auth0

// Redirect user to the Auth0 login page
header('Location: ' . $login_url);
exit;
?>
