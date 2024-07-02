<?php
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mtariri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Basic validation
  if (empty($email) || empty($password)) {
    echo "Email or Password is empty!";
  } else {
    // Prepare and bind
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $_SESSION['email'] = $email;
      header("Location: ./panel/index.php");
      exit();
    } else {
      echo "Invalid email or password!";
    }
    $stmt->close();
  }
}

$conn->close();
?>


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login | My Mtariri</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="public/css/app.min.css">
  <link rel="stylesheet" href="public/bundles/bootstrap-social/bootstrap-social.css">
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
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-microsoft">
                      <span class="fab fa-microsoft"></span> Microsoft
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-google">
                      <span class="fab fa-google"></span> Google
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="./register.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <script src="public/js/app.min.js"></script>
  <script src="public/js/scripts.js"></script>
  <script src="public/js/custom.js"></script>


</body>