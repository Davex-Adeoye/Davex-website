<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
    }
    .sidebar {
        width: 220px;
        height: 100vh;
        background-color: #ff6f00; /* IITA Orange vibe */
        position: fixed;
        top: 0;
        left: 0;
        color: white;
        padding: 20px;
    }
    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    .sidebar a {
        color: white;
        display: block;
        padding: 10px 0;
        text-decoration: none;
    }
    .sidebar a:hover {
        background-color: #ff8f00;
        padding-left: 10px;
        transition: 0.3s;
    }
    .main {
        margin-left: 220px;
        padding: 20px;
    }
    .card {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    .logout {
        margin-top: 20px;
        text-align: center;
    }
    .logout a {
        text-decoration: none;
        color: white;
        background-color: #c62828;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .logout a:hover {
        background-color: #e53935;
    }
</style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="main">
    <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>

    <div class="card">
        <h2>Total Users</h2>
        <p>
            <?php
            include 'db.php';
            $stmt = $pdo->query("SELECT COUNT(*) FROM users");
            echo $stmt->fetchColumn();
            ?>
        </p>
    </div>

    <div class="card">
        <h2>Recent Users</h2>
        <ul>
            <?php
            $stmt = $pdo->query("SELECT username, email FROM users ORDER BY id DESC LIMIT 5");
            while($row = $stmt->fetch()){
                echo "<li>".$row['username']." (".$row['email'].")</li>";
            }
            ?>
        </ul>
    </div>
</div>

</body>
</html>
