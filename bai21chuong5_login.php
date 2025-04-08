<?php
session_start();

// Lấy dữ liệu từ form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Kiểm tra thông tin
$isValid = ($username == "admin" && $email == "admin@gmail.com" && $password == "123456");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xử lý đăng nhập</title>
    <style>
        body {
            background: linear-gradient(to right,rgb(162, 230, 173), #cfdef3);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-result {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 500px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: <?= $isValid ? "#2e7d32" : "#c62828" ?>;
            margin-bottom: 30px;
        }

        a button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: <?= $isValid ? "#4CAF50" : "#1976d2" ?>;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        a button:hover {
            background-color: <?= $isValid ? "#43a047" : "#1565c0" ?>;
        }
    </style>
</head>
<body>
    <div class="login-result">
        <h2>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h2>
        <?php if ($isValid): ?>
            <?php
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
            ?>
            <p>✅ Thông tin đăng nhập hợp lệ</p>
            <a href="bai21chuong5_mainpage.php"><button>Trang chính</button></a>
        <?php else: ?>
            <p>❌ Thông tin đăng nhập không hợp lệ!</p>
            <a href="bai21chuong5_login.html"><button>Quay lại</button></a>
        <?php endif; ?>
    </div>
</body>
</html>
