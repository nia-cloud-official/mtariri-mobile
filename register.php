<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Register Page">
   <meta name="author" content="Your Name">
   <title>Register Page</title>

   <!-- Importing custom fonts -->
   <link href="https://fonts.googleapis.com/css?family=Figtree:800|DM+Sans:400" rel="stylesheet">
</head>

<body>

<?php
  if(!isset($_POST["password"])){ 
   # [Do nothing at all]
  }else{ 
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   $conn  = mysqli_connect("localhost","milto","lola","mtariri");
   $query1 = "SELECT * FROM `users` WHERE `email` = '$email'";
   $result = mysqli_query($conn,$query1);
   if(!mysqli_fetch_array($result)){
      echo "<div class='notify'>Authenticating...</div>";
      $query = "INSERT INTO `users` (`id`, `username`, `phone`, `email`, `user_id`, `password`, `created_at`) VALUES (NULL, '$username', '$phone','$email','','$password', current_timestamp())";
      mysqli_query($conn,$query);
      $_SESSION['email'] = $email;
      header("Location: ./panel/index.php");
   }else {
      echo "<div class='notify'><p>An account associated with this email already exists, Please login instead</p></div>";
   } 
  }
?>
<style>
   .notify { 
      background-color: #745b2d  !important;
      padding:20px;
      width: 400px;
   }
</style>

<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | My Mtariri</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="public/css/app.min.css">
  <link rel="stylesheet" href="public/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="public/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='public/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="email" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Phone Number</label>
                    <input id="phone" type="phone" class="form-control" name="phone">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="password" type="password" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="./login.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="public/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="public/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="public/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="public/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="public/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="public/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>
</body>

</html>