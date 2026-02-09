<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($hash);
$stmt->fetch();

if (!$hash) {
    die("Login gagal");
}

if (password_verify($password, $hash)) {
    $_SESSION['login'] = true;
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit;
}

die("Login gagal");
