<style>
    body {
        font-family: Arial;
        background: linear-gradient(to right, #e3ffe7, #d9e7ff);
        padding: 50px;
    }
    .main-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 500px;
        margin: auto;
        text-align: center;
    }
    button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
    }
</style>

<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: bai21chuong5_login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chính</title>
</head>
<body>
    <h2>TRANG CHÍNH</h2>
    <p>Người dùng đã đăng nhập với tên <strong><?php echo $_SESSION['username']; ?></strong> và Email là <strong><?php echo $_SESSION['email']; ?></strong>.</p>
    <a href="bai21chuong5_logout.php"><button>Đăng xuất</button></a>
</body>
</html>
