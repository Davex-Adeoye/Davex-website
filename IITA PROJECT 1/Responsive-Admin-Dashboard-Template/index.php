<?php
// Include signup/login PHP processing at the top
include 'signup.php';
include 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IITA Hardware Solutions Hub</title>
  <!-- <link rel="stylesheet" href="stfyle.css"> -->
  <link rel="icon" href="ilogo.jpg" type="image/x-icon">
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #ffffffff;
    }
    a { text-decoration: none; color: #e05206ff; }          
    a:hover { text-decoration: underline; }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background:  #e05206ff;
      padding: 15px 40px;
      color: white;
      font-weight: bold;
    }

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 60px 20px;
      background: #f5f1ebff;
    }
    .hero h1 { color: #e05206ff; font-size: 32px; margin-bottom: 15px; }
    .hero p { color: #333; font-size: 18px; }

    /* Login Section */
    .login-section {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 40px 20px;
      flex-wrap: wrap;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      padding: 25px;
      width: 300px;
      text-align: center;
    }
    .card h2 { color: #e05206ff; margin-bottom: 15px; }
    .card form input, .card form button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .card form button {
      background: #e05206ff;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }
    .card form button:hover { background: #e05206ff; }

    /* Error/Success Messages */
    .message { font-size: 14px; margin-top: 8px; }
    .error { color: red; }
    .success { color: green; }

    /* Modal Signup */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background: rgba(0,0,0,0.6);
    }
    .modal-content {
      background: white;
      margin: 8% auto;
      padding: 25px;
      border-radius: 12px;
      width: 400px;
      text-align: center;
      position: relative;
    }
    .modal-content h2 { color: #e05206ff; margin-bottom: 15px; }
    .modal-content input, .modal-content button {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .modal-content button {
      background: #e05206ff;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }
    .modal-content button:hover { background: #e05206ff; }
    .close {
      position: absolute;
      top: 10px;
      right: 20px;
      font-size: 24px;
      cursor: pointer;
      color: #333;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #e05206ff;
      color: white;
      margin-top: 195px;
    }

    /* Responsive */
    @media (max-width: 500px) {
      .card, .modal-content { width: 90%; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">IITA Hardware Hub</nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to IITA Hardware Solutions Hub</h1>
    <p>Your one-stop platform for solving computer hardware issues.</p>
  </section>

  <!-- Login Section -->
  <section class="login-section">
    <!-- User Login -->
    <div class="card">
      <h2>User Login</h2>
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <?php if(isset($login_error)) echo "<p class='message error'>$login_error</p>"; ?>
      <p>New user? <a href="#" onclick="openSignup()">Sign up here</a></p>
    </div>

    <!-- Admin Login -->
    <div class="card">
      <h2>Admin Login</h2>
      <form action="admin_login.php" method="POST">
        <input type="text" name="admin_username" placeholder="Admin Username" required>
        <input type="password" name="admin_password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </section>

  <!-- Signup Modal -->


  <?php if($error): ?>
    <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<?php if($success): ?>
    <p style="color:green;"><?php echo htmlspecialchars($success); ?></p>
<?php endif; ?>

  <div id="signupModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeSignup()">&times;</span>
      <h2>User Signup</h2>
      <form action="signup.php" method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
         <input type="password" name="password" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
      </form>
      <?php
        if(isset($error)) echo "<p class='message error'>$error</p>";
        if(isset($success)) echo "<p class='message success'>$success</p>";
      ?>
    </div>
  </div>

  <!-- Footer -->
  <footer>© 2025 IITA - Hardware Solutions Hub</footer>

  <!-- JS for modal -->
  <script>
    function openSignup() {
      document.getElementById("signupModal").style.display = "block";
    }
    function closeSignup() {
      document.getElementById("signupModal").style.display = "none";
    }
    window.addEventListener("keydown", function(e){
      if(e.key === "Escape") closeSignup();
    });
  </script>

</body>
</html>
