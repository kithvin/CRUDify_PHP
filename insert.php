<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />

  <!-- Make the page responsive -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Login</title>

  <!-- Link to external CSS -->
  <link rel="stylesheet" href="style.css" />
</head>
<body>

    <!-- Login card -->

  <div class="container">
    <h1>Login</h1>

    <!-- Login form -->

    <form>

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

    <!-- Login Form Footer -->
    <div class="footer">
      © <span id="year"></span> CRUDify_PHP
    </div>
  </div>

<!-- Auto-update year -->
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
