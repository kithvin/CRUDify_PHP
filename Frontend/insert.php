<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />

  <!-- Make the page responsive on all devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Login</title>

  <!-- External CSS file -->
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Login card container -->
  <div class="container">
    <h1>Login</h1>

    <!-- Login form (submits data to Insert.inc.php) -->
    <form action="../backend/insert.inc.php" method="POST">
      
      <!-- Username field -->
      <div class="form-group">
        <label for="userName">Username</label>
        <input type="text" id="userName" name="userName" placeholder="Enter your username" required />
      </div>

      <!-- Email field -->
      <div class="form-group">
        <label for="userGmail">Email</label>
        <input type="email" id="userGmail" name="userGmail" placeholder="Enter your email" required />
      </div>

      <!-- Password field -->
      <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" id="userPassword" name="userPassword" placeholder="Enter your password" required />
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn">Submit</button>
    </form>

    <!-- Footer -->
    <div class="footer">
      © <span id="year"></span> CRUDify_PHP
    </div>
  </div>

  <!-- JavaScript to auto-update the year -->
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
