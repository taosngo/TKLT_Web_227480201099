<?php
$target_dir = "Tailieu/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);

if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
    $message = "✅ File " . htmlspecialchars(basename($_FILES["myfile"]["name"])) . " đã được tải lên.";
} else {
    $message = "❌ Có lỗi xảy ra khi upload file.";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả upload</title>
    <style>
        body {
            background: #ffeaa7;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
        }

        h2 {
            color: #2d3436;
        }

        a {
            text-decoration: none;
            display: inline-block;
            background: #0984e3;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        a:hover {
            background: #74b9ff;
        }
    </style>
</head>
<body>
    <div class="result">
        <h2><?php echo $message; ?></h2>
        <a href="bai23chuong5_upload_form.html">🔙 Quay lại</a>
    </div>
</body>
</html>
