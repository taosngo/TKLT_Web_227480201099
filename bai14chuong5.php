<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý Ma trận</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(125, 235, 151);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: 15px auto;
        }
        th, td {
            color:#28a745;  
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        select, input[type="submit"] {
            padding: 8px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #28a745;
            width: 80px;
            color: white;
            border: none;
        }
        h2{
            color: #28a745;
        }
        option{
            font-weight: bold;
            color:#28a745;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>CHƯƠNG TRÌNH XỬ LÍ MA TRẬN</h2>

        <?php
    
        $matrix = [
            [1.1, 2.3, 3.1, 4.0, 5.0],
            [6.2, 7.7, 8.8, 9.5, 1.2],
            [4.6, 1.9, 3.6, 8.9, 1.5],
            [1.6, 1.7, 1.8, 1.9, 2.0]
        ];


        function findMax($matrix) {
            $max = $matrix[0][0];
            foreach ($matrix as $row) {
                foreach ($row as $num) {
                    if ($num > $max) {
                        $max = $num;
                    }
                }
            }
            return $max;
        }


        function findMin($matrix) {
            $min = $matrix[0][0];
            foreach ($matrix as $row) {
                foreach ($row as $num) {
                    if ($num < $min) {
                        $min = $num;
                    }
                }
            }
            return $min;
        }


        function sumMatrix($matrix) {
            $sum = 0;
            foreach ($matrix as $row) {
                foreach ($row as $num) {
                    $sum += $num;
                }
            }
            return $sum;
        }

       
        function printMatrix($matrix) {
            echo "<table>";
            foreach ($matrix as $row) {
                echo "<tr>";
                foreach ($row as $num) {
                    echo "<td>$num</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

    
        echo "<h3>Ma trận:</h3>";
        printMatrix ($matrix);

      
        if (isset($_POST["option"])) {
            $option = $_POST["option"];
            echo "<h3>Kết quả:</h3>";
            if ($option == "max") {
                echo "<p>Số lớn nhất trong ma trận: <strong>" . findMax($matrix) . "</strong></p>";
            } elseif ($option == "min") {
                echo "<p>Số nhỏ nhất trong ma trận: <strong>" . findMin($matrix) . "</strong></p>";
            } elseif ($option == "sum") {
                echo "<p>Tổng các số trong ma trận: <strong>" . sumMatrix($matrix) . "</strong></p>";
            }
        }
        ?>

        <form method="post">
            <label><strong>Chọn chức năng:</strong></label>
            <select name="option">
                <option value="max">Tìm số lớn nhất</option>
                <option value="min">Tìm số nhỏ nhất</option>
                <option value="sum">Tính tổng</option>
            </select>
            <input type="submit" value="IN">
        </form>
    </div>

</body>
</html>
