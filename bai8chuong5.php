<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Năm</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }
        h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }
        form {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        label {
            font-size: 20px;
            font-weight: bold;
        }
        select {
            font-size: 18px;
            padding: 5px;
            border-radius: 5px;
            border: none;
        }
        input[type="submit"] {
            font-size: 18px;
            padding: 8px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #ffcc00;
            color: black;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #ff9900;
        }
        p {
            font-size: 22px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Chọn năm</h2>
    <form method="post">
        <label for="year">Năm:</label>
        <select name="year" id="year">
            <?php
            $currentYear = date("Y"); 
            for ($year = 1900; $year <= $currentYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Chọn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedYear = $_POST["year"];
        echo "<p>Bạn đã chọn năm: <strong>$selectedYear</strong></p>";
    }
    ?>
</body>
</html>
