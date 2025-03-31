<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn Cờ Vua</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: rgb(177, 240, 198);
            margin: 0;
        }
        h2 {
            font-size: 50px;
            text-align: center;
        }
        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 60px);
            grid-template-rows: repeat(8, 60px);
            border: 5px solid black;
        }
        .square {
            width: 60px;
            height: 60px;
        }
        .den {
            background-color: black;
        }
        .trang {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Bàn Cờ Vua</h2>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 8; $col++) {
                $class = (($row + $col) % 2 == 0) ? "trang" : "den";
                echo "<div class='square $class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
