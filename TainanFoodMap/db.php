<?php
$servername = "localhost";
$username = "root";
$password = "";  // 如果有密碼請填入
$dbname = "2026iie";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}
?>
