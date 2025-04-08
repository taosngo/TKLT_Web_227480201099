<?php
$upload_dir = "BoSuuTap/";
$files = $_FILES['files'];
$messages = [];

for ($i = 0; $i < count($files['name']); $i++) {
    $filename = basename($files['name'][$i]);
    $target_file = $upload_dir . $filename;
    if (move_uploaded_file($files['tmp_name'][$i], $target_file)) {
        $messages[] = "✅ $filename đã upload thành công.";
    } else {
        $messages[] = "❌ Upload thất bại với $filename.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả upload nhiều file</title>
    <style>
        body {
            background: #dff9fb;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 500px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #2d3436;
        }

        ul {
            text-align: left;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            background: #00cec9;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
        }

        a:hover {
            background: #81ecec;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Kết quả upload</h2>
        <ul>
            <?php foreach ($messages as $msg) echo "<li>$msg</li>"; ?>
        </ul>
        <a href="bai24chuong5_upload_multi_form.html">🔙 Quay lại</a>
    </div>
</body>
</html>
