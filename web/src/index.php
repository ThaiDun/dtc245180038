<?php
include 'db.php';
$result = $conn->query("SELECT * FROM projects ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Cá Nhân - DTC245180038</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f9; color: #333; }
        header { background: #2c3e50; color: #fff; padding: 20px; text-align: center; border-radius: 5px; }
        .container { margin-top: 20px; }
        .project-card { background: #fff; padding: 15px; margin-bottom: 10px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .admin-link { display: inline-block; margin-top: 20px; text-decoration: none; background: #2980b9; color: white; padding: 10px 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <header>
        <h1>Chào mừng đến với Portfolio của tôi!</h1>
        <p>Sinh viên Kỹ thuật phần mềm - Mã SV: dtc245180038</p>
    </header>
    <div class="container">
        <h2>Dự án tiêu biểu</h2>
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='project-card'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Chưa có dự án nào được thêm. Hãy vào trang quản trị để thêm!</p>";
        }
        ?>
        <a href="/admin.php" class="admin-link">Đến trang quản trị (Admin)</a>
    </div>
</body>
</html>
