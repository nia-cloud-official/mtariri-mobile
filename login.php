<?php 

/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login | My Mtariri</title>
    <link rel="stylesheet" href="./login_includes/style.css">
</head>
<body style="background-image: url('./assets/images/white-cubes-3d-background_23-2150505295.avif');background-position:center;background-size:cover;">

<center>
    <div class="container" style="padding-top: 50%;">

    </div>
        <div class="form-container">
      <p class="title">Welcome back</p>
      <form class="form" method="post" action="loginController.php">
        <input type="email" class="input" placeholder="Email">
        <input type="password" class="input" placeholder="Password">
        <p class="page-link">
          <span class="page-link-label">Forgot Password?</span>
        </p>
        <button class="form-btn">Log in</button>
      </form>
      
      <p class="sign-up-label">
        If you don't have an account!
      </p>
      <br>
      <div class="buttons-container">
        
        <a href="./register.php">
        <div class="apple-login-button">
          <span>Create an Account</span>
        </div>
        </a>
      </div>
</div>
    </center>

</body>
</html>   
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login | My Mtariri</title>
    <link rel="stylesheet" href="./login_includes/style.css">
    <style>
        /* Add styles for the loading animation */
       .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
       .loading-logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        
       .loading-animation {
            width: 50px;
            height: 50px;
            border: 5px solid #ccc;
            border-top: 5px solid #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body style="background-image: url('./assets/images/white-cubes-3d-background_23-2150505295.avif');background-position:center;background-size:cover;">

    <!-- Add a loading animation container -->
    <div class="loading">
        <img src="./logo.png" style="height: 350px;width: 350px;" class="loading-logo" alt="Logo">
    </div>

    <!-- Your login form container -->
    <center>
      <br><br>
    <img src="./logo.png" alt="My Mtariri Logo" style="height: 200px;">  
        <div class="container" style="padding-top: 10%; display: none;"> <!-- Add display: none to hide the container initially -->  
        <div class="form-container">
                <p class="title">Welcome back</p>
                <form class="form" method="post" action="loginController.php">
                    <input type="email" class="input" placeholder="Email">
                    <input type="password" class="input" placeholder="Password">
                    <p class="page-link">
                        <span class="page-link-label">Forgot Password?</span>
                    </p>
                    <button class="form-btn">Log in</button>
                </form>
                
                <p class="sign-up-label">
                    If you don't have an account!
                </p>
                <br>
                <div class="buttons-container">
                    
                    <a style="text-decoration: none;" href="./register.php">
                    <div class="apple-login-button">
                        <span>Create an Account</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </center>

    <!-- Add JavaScript to hide the loading animation and show the login form after 2 seconds -->
    <script>
        setTimeout(function() {
            document.querySelector('.loading').style.display = 'none';
            document.querySelector('.container').style.display = 'block';
        }, 2000);
    </script>

</body>
</html>
