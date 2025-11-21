<?php

// includes/db.inc.php

$dsn = "mysql:host=localhost;dbname=userinfo";
$dbusername = "root";
$dbpassword = "";

try {
    // Tạo đối tượng PDO và gán vào biến $pdo
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    // Thiết lập chế độ báo lỗi để PDO ném ra Exception khi có lỗi
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Nếu kết nối thất bại, dừng chương trình và báo lỗi
    // (Trong môi trường thực tế, bạn nên log lỗi thay vì hiển thị ra màn hình)
    die("Connection failed: " . $e->getMessage());
}