<?php
include 'db.php';

$error = '';
$success = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($fullname) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if($stmt->rowCount() > 0) {
            $error = "Email is already registered!";
        } else {
            // Hash password
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
            if($stmt->execute([$fullname, $email, $hash])) {
                $success = "Signup successful! You can now login.";
        

                
            } else {
                $error = "Signup failed. Try again.";
            }
        }
    }
}

?>
