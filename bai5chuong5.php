<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color: blue;
    color: yellow;
    font-size: 50px;
}
.ph{
    background-color:pink;
}

 </style>
<body>
    
<?php
function uscln($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function bscnn($a, $b) {
    return ($a * $b) / uscln($a, $b);
}

$result = "";
$num1 = isset($_POST["num1"]) ? $_POST["num1"] : "";
$num2 = isset($_POST["num2"]) ? $_POST["num2"] : "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($num1) && is_numeric($num2)) {
        $a = intval($num1);
        $b = intval($num2);

        if (isset($_POST["uscln"])) {
            $result = "Ước số chung lớn nhất: " . uscln($a, $b);
        } elseif (isset($_POST["bscnn"])) {
            $result = "Bội số chung nhỏ nhất: " . bscnn($a, $b);
        }
    } else {
        $result = "Vui lòng nhập hai số hợp lệ!";
    }
}
?>
<div class="ph">
<form align = 'center' method="post">
    <p><b>Tính USCLN VÀ BSCNN</b></p>
    Số thứ 1: <input type="number" name="num1" value="<?php echo $num1; ?>" required><br>
    Số thứ 2: <input type="number" name="num2" value="<?php echo $num2; ?>" required><br>
    <p><strong>Kết quả:</strong> <?php echo $result; ?></p>
    <input class"ngu1" type="submit" name="uscln" value="ƯỚC SỐ CHUNG LỚN NHẤT">
    <input class"ngu1" type="submit" name="bscnn" value="ƯỚC SỐ CHUNG NHỎ NHẤT">
</form>
</div>


</body>
</html>