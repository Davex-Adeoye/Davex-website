<?php
session_start();
include 'db.php';

$admin_error = '';

// Example hardcoded admin (you can create an admin table later)
$admin_username = "admin";
$admin_password = "admin123";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['admin_username']);
    $password = trim($_POST['admin_password']);

    if($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php"); // Redirect admin
        exit;
    } else {
        $admin_error = "Invalid admin credentials!";
    }
}

?>




// <?php
// session_start();
// include 'db.php';

// $admin_error = '';

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = trim($_POST['admin_username']);
//     $password = trim($_POST['admin_password']);

//     // Fetch admin from database
//     $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
//     $stmt->execute([$username]);
//     $admin = $stmt->fetch();

//     if($admin && password_verify($password, $admin['password'])) {
//         $_SESSION['admin'] = $admin['username'];
//         header("Location: admin_dashboard.php");
//         exit;
//     } else {
//         $admin_error = "Invalid admin credentials!";
//     }
// }
// 

 // <form method="post" action="">
//     <input type="text" name="admin_username" placeholder="Username" required><br>
//     <input type="password" name="admin_password" placeholder="Password" required><br>
//     <button type="submit">Login</button>
// </form>

// <?php if($admin_error) echo "<p style='color:red;'>$admin_error</p>"; 
