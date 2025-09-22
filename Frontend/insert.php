<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Account</title>
  <style>
    /* page style */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      color: #333;
    }

    /* heading */
    h1 {
      color: white;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      font-size: 2.5rem;
    }

    /* form box */
    form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 450px;
      transition: transform 0.3s ease;
      position: relative;
    }
    
    form:hover {
      transform: translateY(-5px);
    }

    /* labels */
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #2c3e50;
      margin-top: 15px;
    }
    
    /* inputs */
    input {
      width: 100%;
      padding: 14px;
      border: 2px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    
    input:focus {
      border-color: #6e8efb;
      box-shadow: 0 0 0 3px rgba(110, 142, 251, 0.2);
      outline: none;
    }
    
    input[type="password"] {
      letter-spacing: 1px;
    }
    
    /* submit button */
    input[type="submit"] {
      background: #6e8efb;
      color: white;
      border: none;
      padding: 15px;
      font-size: 16px;
      font-weight: 600;
      margin-top: 25px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    
    input[type="submit"]:hover {
      background: #5a7df9;
    }
    
    /* gradient bar top */
    form::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(to right, #6e8efb, #a777e3);
      border-radius: 12px 12px 0 0;
    }
    
    /* responsive */
    @media (max-width: 500px) {
      form { padding: 20px; }
      h1 { font-size: 2rem; }
    }
  </style>
</head>
<body>
  <h1>User Account</h1>

  <!-- form -->
  <form action="../backend/Insert.inc.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
