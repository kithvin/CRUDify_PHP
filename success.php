<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  
  <!-- Link to your main CSS file -->
  <link rel="stylesheet" href="style.css">

  <!-- Inline styles (specific to this page) -->
  <style>
    /* ===== Title styling ===== */
    .welcome-title {
      font-size: 28px;
      font-weight: 700;
      color: #2563eb;   /* Blue highlight */
      text-align: center;
      margin-bottom: 16px;
    }

    /* ===== Subtitle / message styling ===== */
    .welcome-message {
      text-align: center;
      font-size: 16px;
      color: #475569;
      margin-bottom: 24px;
    }

    /* ===== Celebration emoji styling ===== */
    .emoji {
      font-size: 40px;
      display: block;
      text-align: center;
      margin-bottom: 20px;
    }

    /* ===== Footer styling ===== */
    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 13px;
      color: #94a3b8;
    }
  </style>
</head>
<body>
  <!-- Main container (uses .container from style.css) -->
  <div class="container">
    
    <!-- Celebration emoji -->
    <span class="emoji">🎉</span>
    
    <!-- Main welcome title -->
    <h1 class="welcome-title">Welcome!</h1>
    
    <!-- Subtitle / message for the user -->
    <p class="welcome-message">
      Your account has been created successfully. <br>
      We’re excited to have you on board 🚀
    </p>
    
    <!-- Footer with dynamic year -->
    <div class="footer">
      <p>© <?php echo date("Y"); ?> My Website — All rights reserved.</p>
    </div>
  </div>
</body>
</html>
