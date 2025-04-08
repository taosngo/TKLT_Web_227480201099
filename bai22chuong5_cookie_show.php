
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị cookie</title>
    <style>
        body {
            background: #dff9fb;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
        }

        h2 {
            color: #2d3436;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #6c5ce7;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        a:hover {
            background: #a29bfe;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Thông tin khách hàng từ cookie</h2>
        <?php
        if (isset($_COOKIE['customer_name']) && isset($_COOKIE['customer_phone'])) {
            echo "<p>👤 Tên khách hàng: <strong>" . $_COOKIE['customer_name'] . "</strong></p>";
            echo "<p>📱 Số điện thoại: <strong>" . $_COOKIE['customer_phone'] . "</strong></p>";
        } else {
            echo "<p>❌ Cookie không tồn tại hoặc đã hết hạn.</p>";
        }
        ?>
        <a href="bai22chuong5_cookie_form.html">🔙 Quay lại</a>
    </div>
</body>
</html>
