<?php
$warna = ["hijau", "kuning", "kelabu", "merah muda", "biru"];
?>

<!DOCTYPE html>
<html>
<head>
<title>Contoh Coding</title>
</head>
<body>

<p>Balonku ada lima.</p>
<p>Rupa-rupa warna-nnya</p>
<p>
<?php
for ($i = 0; $i < count($warna); $i++) {
    if ($i == count($warna) - 1) {
        echo "<span style='background-color: yellow;'>".$warna[$i]."</span>";
    } else {
        echo "<span style='background-color: yellow;'>".$warna[$i]."</span>, ";
    }
}
?>
</p>
<p>Meletus balon <span style='background-color: yellow;'>hijau</span> DOR!!!</p>
<p>Hatiku sangat kacau..</p>


</body>
</html>