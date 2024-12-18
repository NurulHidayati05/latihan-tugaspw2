<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Kotak</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php
    $rows = 5; // Jumlah baris
    
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>