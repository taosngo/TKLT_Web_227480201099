<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
setcookie("customer_name", $name, time() + 600);
setcookie("customer_phone", $phone, time() + 600);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cookie đã lưu</title>
    <style>
        body {
            background: #ffeaa7;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            color: #2d3436;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #0984e3;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        a:hover {
            background: #74b9ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thông tin đã được lưu vào cookie!</h2>
        <a href="bai22chuong5_cookie_show.php">Xem thông tin cookie</a>
    </div>
</body>
</html>
