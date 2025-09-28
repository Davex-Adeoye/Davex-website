<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IITA Hardware Solutions Hub</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="ilogo.jpg" type="image/x-icon">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f5f5;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #f5671b; /* deep orange */
      padding: 15px 30px;
      color: white;
    }
    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
    }

    /* Hero */
    .hero {
      text-align: center;
      padding: 50px 20px;
      background: #fff3e0; /* light orange */
    }
    .hero h1 {
      color: #f5671b; ;
      font-size: 32px;
    }
    .hero p {
      color: #333;
      font-size: 18px;
    }

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
      padding: 20px;
      width: 300px;
      text-align: center;
    }
    .card h2 {
      color: #f5671b; 
    }
    .card form input, .card form button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .card form button {
      background: #f5671b; 
      color: white;
      border: none;
      cursor: pointer;
    }
    .card form button:hover {
      background: #f5671b; /* brighter orange */
    }

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
      margin: 10% auto;
      padding: 20px;
      border-radius: 12px;
      width: 400px;
      text-align: center;
      position: relative;
    }
    .modal-content h2 {
      margin-bottom: 15px;
      color: #f5671b; 
    }
    .modal-content input, .modal-content button {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .modal-content button {
      background: #f5671b; 
      color: white;
      border: none;
      cursor: pointer;
    }
    .modal-content button:hover {
      background: #f5671b; 
    }
    .close {
      position: absolute;
      top: 10px;
      right: 20px;
      font-size: 20px;
      cursor: pointer;
      color: #333;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #f5671b; 
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">IITA Hardware Hub</div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <h1>Welcome to IITA Hardware Solutions Hub</h1>
    <p>Your one-stop platform for solving computer hardware issues.</p>
  </section>

  <!-- Login Section -->
  
  <!-- Signup Modal -->
  
  <script>
    function openSignup() {
      document.getElementById("signupModal").style.display = "block";
    }
    function closeSignup() {
      document.getElementById("signupModal").style.display = "none";
    }
    function signupUser(event) {
      event.preventDefault();
      alert("Signup successful! You can now login.");
      closeSignup();
    }
  </script>

  <script src="script.js"></script>
</body>
</html>
