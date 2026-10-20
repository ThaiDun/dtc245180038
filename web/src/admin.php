<?php
include 'db.php';

// Tạo bảng tự động nếu chưa có
$conn->query("CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
)");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    if (!empty($title) && !empty($desc)) {
        $conn->query("INSERT INTO projects (title, description) VALUES ('$title', '$desc')");
        echo "<p style='color:green;'>Thêm dự án thành công!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Quản Trị Portfolio - DTC245180038</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 500px; }
        input, textarea { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        button { background: #27ae60; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 4px; }
        a { display: inline-block; margin-top: 15px; text-decoration: none; color: #2980b9; }
    </style>
</head>
<body>
    <h1>Quản trị nội dung Portfolio</h1>
    <form method="POST">
        <label>Tên dự án:</label>
        <input type="text" name="title" required>
        <label>Mô tả:</label>
        <textarea name="description" rows="4" required></textarea>
        <button type="submit">Lưu dự án</button>
    </form>
    <a href="/index.php">← Quay lại trang chủ Portfolio</a>
</body>
</html>
