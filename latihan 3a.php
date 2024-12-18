<?php
function ganti_style($text, $class) {
    return "<span class='$class'>$text</span>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a PHP</title>
    <!-- Internal CSS -->
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $tulisan = "Hello World! Here I come!";
    $kelas = "ganti-style";
    echo ganti_style($tulisan, $kelas);
    ?>
</body>
</html>