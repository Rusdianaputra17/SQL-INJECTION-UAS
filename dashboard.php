<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h2>Dashboard</h2>
    <p>Selamat datang, <b><?php echo $_SESSION['user']; ?></b></p>

    <a href="logout.php">Logout</a>

</body>
</html>
