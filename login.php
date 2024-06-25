<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if email and password are set
    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate email (basic validation, you might want to enhance this)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='notify'>Invalid Email format. Please enter a valid email address.</div>";
        } else {
            // Connect to your database 
            $conn  = mysqli_connect("localhost","qbwwvrrspz","c2CeTa6E7n","qbwwvrrspz");

            if ($conn) {
                // Sanitize inputs to prevent SQL injection
                $email = mysqli_real_escape_string($conn, $email);
                $password = mysqli_real_escape_string($conn, $password);

                // Query to check if the user exists
                $query = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $user = mysqli_fetch_assoc($result);

                    // Check if user exists and verify password
                    if ($user && password_verify($password, $user['password'])) {
                        $_SESSION['email'] = $user['email'];
                        header("Location: ./panel/index.php");
                        exit;
                    } else {
                        echo "<div class='notify'>Invalid Email or Password. Please try again.</div>";
                    }
                } else {
                    echo "<div class='notify'>Database query error: " . mysqli_error($conn) . "</div>";
                }

                // Close database connection
                mysqli_close($conn);
            } else {
                echo "<div class='notify'>Database connection error: " . mysqli_connect_error() . "</div>";
            }
        }
    } else {
        echo "<div class='notify'>Please enter both email and password.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Login Page">
   <meta name="author" content="Your Name">
   <title>Login Page</title>
   
   <!-- Importing custom fonts -->
   <link href="https://fonts.googleapis.com/css?family=Figtree:800|DM+Sans:400" rel="stylesheet">
   
   <!-- Custom CSS -->
   <style>
      :root {
         --text: #ffffff;
         --background: #212121;
         --primary: #ff9800;
         --accent: #673ab7;
         --error: #f44336;
      }

      * {
         box-sizing: border-box;
         margin: 0;
         padding: 0;
      }

      html {
         font-size: 16px;
      }

      body {
         font-family: "DM Sans", sans-serif;
         background-color: var(--background);
         color: var(--text);
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         margin: 0;
         padding: 0;
      }

      .login-form {
         background: rgba(255, 255, 255, 0.1);
         border-radius: 1rem;
         padding: 2rem;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
         width: 100%;
         max-width: 400px;
         text-align: center;
      }

      .login-form img {
         width: 100px;
         margin-bottom: 1rem;
      }

      .login-form input {
         width: calc(100% - 2rem);
         padding: 1rem;
         margin: 0.5rem 0;
         font-size: 1rem;
         border: none;
         border-radius: 0.5rem;
         background: rgba(255, 255, 255, 0.8);
         outline: none;
         color: var(--text);
      }

      .login-form button {
         width: calc(100% - 2rem);
         padding: 1rem;
         margin: 1rem 0;
         font-size: 1rem;
         border: none;
         border-radius: 0.5rem;
         background: var(--primary);
         color: var(--background);
         cursor: pointer;
         outline: none;
         transition: background 0.3s ease;
      }

      .login-form button:hover {
         background: var(--accent);
      }

      .login-form p {
         font-size: 0.9rem;
         color: rgba(255, 255, 255, 0.8);
         margin-top: 0.5rem;
      }

      .login-form p a {
         color: var(--primary);
         text-decoration: none;
      }

      .login-form p a:hover {
         text-decoration: underline;
      }

      .notify {
         background-color: var(--error);
         padding: 1rem;
         border-radius: 0.5rem;
         margin-top: 1rem;
         color: white;
      }
   </style>
</head>
<body>
   <div class="login-form">
      <form method="post">
         <input type="text" name="email" placeholder="Email" required>
         <input type="password" name="password" placeholder="Password" required>
         <button type="submit">Login</button>
      </form>
      <p>Don't have an account? <a href="./register.php">Sign up</a></p>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         echo "<div class='notify'>Please enter both email and password.</div>";
      }
      ?>
   </div>
</body>
</html>
