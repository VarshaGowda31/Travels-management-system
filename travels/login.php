

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Management Login</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-image: url('photos/logbg.jpg'); /* Specify the path to your background image */
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    #login-container {
      width: 80%;
      max-width: 400px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      position: relative;
      margin-right: 700px;
    }

    #login-container h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 20px;
    }

    #login-form {
      margin-top: 20px;
    }

    #login-form input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    #login-form button,
    #register-button {
      width: 100%;
      padding: 12px;
      color: #000000;
      cursor: pointer;
    }

    #social-login {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 10px; /* Spacing between buttons */
    }

    #google-login,
    #facebook-login,
    #register-button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-align: center;
      transition: background-color 0.3s ease;
    }

    #google-login {
      background-color: #dd4b39;
      color: #fff;
    }

    #facebook-login {
      background-color: #3b5998;
      color: #fff;
    }

    #google-login:hover,
    #facebook-login:hover,
    #register-button:hover {
      background-color: #333;
    }

    #images-container {
      width: 50%;
      height: 100%;
      overflow: hidden;
      position: relative;
      float: right;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    #image-slider {
      width: 200%;
      height: 100%;
      display: flex;
      animation: slide 20s infinite linear;
    }

    .image {
      width: 50%;
      height: 100%;
      background-size: cover;
    }

    @keyframes slide {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
    
    img {
            width: 29%;
    border-radius: 8px;
    margin-bottom: -8px;
    margin-left: 138px;
}

  </style>
</head>
<body>
  <div id="login-container">
    <img src="logio.png" alt="Travel Image">
    <h2>Welcome to Travel Management</h2>
    <form id="login-form" method="POST" action="login_handler.php">
    <input type="text" name="username_or_email" placeholder="Username or Email" required>
<input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

  <script>
    function redirectToRegister() {
      // Redirect to the registration page
      window.location.href = 'register.php'; // Replace 'register.html' with the actual URL of your registration page
    }
  </script> 
 
</div>
</body>
</html>