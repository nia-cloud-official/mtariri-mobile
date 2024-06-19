<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Figtree:800|DM+Sans:400");

    :root {
      --text: #000000; /* Black */
      --text_light: rgba(0, 0, 0, 0.9);
      --text_dark: rgba(0, 0, 0, 0.5);
      --background: #ffffff; /* White */
      --background_dark: #f0f0f0; /* Light grey */
      --primary: #FFA500; /* Orange */
      --secondary: rgba(0, 0, 0, 0.1);
      --accent: #FFA500; /* Orange */
      --outline: rgba(0, 0, 0, 0.2);
      --alert: hsla(360, 60%, 55%, 1);
    }

    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Figtree";
      font-weight: 800;
      line-height: 1;
      color: var(--text);
    }

    html {
      font-size: 100%;
    }

    h1 {
      font-size: 2rem;
    }

    body {
      height: 100%;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: "DM Sans";
      font-weight: 400;
      color: var(--text);
      background: linear-gradient(11deg, var(--background_dark), var(--background));
      padding: 1rem;
    }

    .login-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      background: var(--background_dark);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px var(--outline);
      width: 100%;
      max-width: 400px;
    }

    .login-container h1 {
      margin-bottom: 1.5rem;
    }

    .login-container input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border-radius: 0.5rem;
      border: 1px solid var(--outline);
      background: var(--background);
      color: var(--text);
    }

    .login-container button {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.5rem;
      border: none;
      background: var(--primary);
      color: var(--text);
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background: var(--accent);
    }

    .login-container small {
      margin-top: 1rem;
      color: var(--text_light);
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h1>Login</h1>
    <input type="text" placeholder="Username" required>
    <input type="password" placeholder="Password" required>
    <button>Login</button>
    <small>Forgot your password? <a href="#" style="color: var(--accent);">Click here</a></small>
  </div>
</body>

</html>