<?php
// Soal a dan b menggunakan while
echo "Soal a dan b (menggunakan while):<br>";

// Soal a
$angka = 1;
while ($angka <= 16) {
    echo $angka . " ";
    $angka += 5;
}
    
echo "<br><br>";

// Soal b
$angka = 10;
while ($angka >= 0) {
    echo $angka . " ";
    $angka -= 1;
}

echo "<br><br>";

// Soal c dan d menggunakan do-while
echo "Soal c dan d (menggunakan do-while):<br>";

// Soal c
$angka = 30;
do {
    echo $angka . " ";
    $angka -= 3;
} while ($angka >= 0);

echo "<br><br>";

// Soal d
$angka = 10;
do {
    echo $angka . " ";
    $angka -= 2;
} while ($angka >= 0);
?>