<!-- <?php
$host = "localhost";
$db   = "iita_hub";
$user = "root";
$pass = ""; // XAMPP default password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?> -->

<?php
