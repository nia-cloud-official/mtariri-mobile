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
         --text: hsla(247, 57%, 91%, 1);
         --text_light: hsla(247, 57%, 91%, 0.9);
         --text_dark: hsla(247, 57%, 91%, 0.5);
         --background: rgb(20, 21, 20);
         --background_dark: rgb(16, 16, 15);
         --primary: hsla(241, 25%, 50%, 1);
         --secondary: hsla(247, 8%, 25%, 0.5);
         --accent: rgb(100, 35, 251);
         --outline: hsla(247, 5%, 36%, 1);
         --alert: hsla(360, 60%, 55%, 1);
      }

      * {
         box-sizing: border-box;
         padding: 0;
         margin: 0;
      }

      h1, h2, h3, h4, h5 {
         font-family: "Figtree";
         font-weight: 800;
         line-height: 1;
         color: var(--text);
      }

      html {
         font-size: 100%;
      }

      body {
         height: 100%;
         width: 100%;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         font-family: "DM Sans";
         background: linear-gradient(11deg, var(--background_dark), var(--background));
         color: var(--text);
         margin: 0;
         padding: 2rem;
      }

      .login-form {
         background: rgba(255, 255, 255, 0.1);
         border-radius: 1rem;
         padding: 2rem;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
         width: 100%;
         max-width: 400px;
         text-align: center;
      }

      .login-form h2 {
         font-size: 2rem;
         margin-bottom: 1rem;
      }

      .login-form input {
         width: calc(100% - 2rem);
         padding: 1rem;
         margin: 0.5rem;
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
         color: var(--text_dark);
         margin-top: 0.5rem;
      }

      .login-form p a {
         color: var(--primary);
         text-decoration: none;
      }

      .login-form p a:hover {
         text-decoration: underline;
      }
   </style>
</head>
<body>
   <div class="login-form">
      <h2>Login</h2>
      <form>
         <input type="text" placeholder="Username" required>
         <input type="password" placeholder="Password" required>
         <button type="submit">Login</button>
      </form>
      <p>Don't have an account? <a href="#">Sign up</a></p>
   </div>
</body>
</html>
