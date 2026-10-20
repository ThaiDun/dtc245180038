<?php
$host = 'db';
$user = 'portfolio_user';
$pass = '12345678';
$dbname = 'portfolio_db';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Kết nối Database thất bại: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
