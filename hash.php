<?php
include "koneksi.php";

$username = "rusdiana";
$password = password_hash("putra", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "User berhasil dibuat";
