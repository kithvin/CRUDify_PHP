<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css"> <!-- reuse your existing styles -->

  <style>
    /* Small extra styles just for login page */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .form-container {
      max-width: 400px;
      width: 100%;
      padding: 30px;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
    .form-header h2 {
      margin-bottom: 8px;
      color: #333;
      text-align: center;
    }
    .form-header p {
      margin-bottom: 20px;
      font-size: 14px;
      color: #666;
      text-align: center;
    }
    
  </style>
</head>
<body>
  <div class="form-container">
    <div class="form-header">
      <h2>Login</h2>
      <p>Enter your credentials to continue</p>
    </div>

    <form action="../backend/login.inc.php" method="post">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>

      <div class="btn-group">
        <button type="submit" class="btn btn-update">Login</button>
        <a href="insert.php" class="btn btn-cancel">Create Account</a>
      </div>
    </form>
  </div>
</body>
</html>
