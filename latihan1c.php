<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bilangan Format</title>
   <style>
    .kotak{
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
    
    <div class="container">
        <h1>Bilangan </h1>
        <div class="bilangan">
        <?php
        $rows = 3; // Jumlah baris
        
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                // Mengubah angka menjadi huruf
                $huruf = chr(64 + $j); // chr(65) adalah 'A'
                echo "<div class='kotak'>$huruf</div>";
            }
            echo "<br>";
        }
        ?>
        
            
        </div>
    </div>
</body>
</html>
