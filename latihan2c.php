<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Kotak Berwarna</title>
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
        .kotak-dark {
            background-color: pink;
            color: white;
        }
        .kotak-light {
            background-color: yellow;
            color: black;
        }
    </style>
</head>
<body>
    <?php
    $rows = 5; // Jumlah baris

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            // Kondisi untuk memberikan warna berbeda pada baris genap dan ganjil
            if (($i + $j) % 2 == 0) {
                echo "<div class='kotak kotak-dark'>$j</div>";
            } else {
                echo "<div class='kotak kotak-light'>$j</div>";
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>