<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sql_injection";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi database gagal");
}
