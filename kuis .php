<?php

// Input jumlah bayar
$jumlahBayar = 100000;

// Hitung diskon
if ($jumlahBayar >= 500000) {
    $diskon = 0.5;
} elseif ($jumlahBayar >= 100000) {
    $diskon = 0.1;
} elseif ($jumlahBayar >= 50000) {
    $diskon = 0.05;
} else {
    $diskon = 0;
}

// Hitung jumlah diskon
$jumlahDiskon = $jumlahBayar * $diskon;

// Hitung jumlah bayar setelah diskon
$jumlahBayarSetelahDiskon = $jumlahBayar - $jumlahDiskon;

// Tampilkan hasil
echo "Jumlah bayar: Rp" . number_format($jumlahBayar, 0, ",", ".") . "<br>";
echo "Diskon: " . ($diskon * 100) . "%" . "<br>";
echo "Jumlah diskon: Rp" . number_format($jumlahDiskon, 0, ",", ".") . "<br>";
echo "Jumlah bayar setelah diskon: Rp" . number_format($jumlahBayarSetelahDiskon, 0, ",", ".") . "<br>";

// Soal a dan b menggunakan while
echo "Soal 2a dan 2b (menggunakan while):<br>";

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
echo "Soal 2c dan 2d (menggunakan do-while):<br>";

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