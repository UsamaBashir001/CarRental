<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Sign Up Form</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-wrapper {
      background-color: transparent;
      border: 1px solid white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 70px;
      width: 400px;
      max-width: 100%;
    }

    .form-wrapper h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      margin-left: -23px;
      border: none;
      border-radius: 4px;
      background-color: #00ff00;
      color: #fff;
      padding: 15px;
      font-weight: bold;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #0ade;
    }

    .form-group .switch-link {
      margin-top: 10px;
    }

    .form-group .switch-link a {
      color: #4CAF50;
      text-decoration: none;
    }

    .form-group .switch-link a:hover {
      text-decoration: underline;
    }
    /* Colors moving */
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1;
    }

    .animated-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: gray;
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease-in-out infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .content {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 20px;
      color: #fff;
      font-size: 24px;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
    <div class="background">
        <div class="animated-bg"></div>
      </div>
      <div class="content">
        
        
      </div>
  <div class="container">
    <div class="form-wrapper">
      <h2 style="color:white";>Login</h2>
      <form action="loginCode.php" method="POST">
        <div class="form-group">
          <label for="username" style="color:white";>Username</label>
          <input type="text" id="username" name="username" required style="padding:20px";>
        </div>
        <div class="form-group">
          <label for="password" style="color:white";>Password</label>
          <input type="password" id="password" name="password" required style="padding:20px">
        </div>
        <div class="form-group" style="margin-top:30px;padding-left:25px";>
          <button type="submit">Login</button>
        </div>
        <div class="form-group switch-link">
          <span>Don't have an account?</span> <a href="#">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
