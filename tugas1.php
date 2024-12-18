<?php
// Fungsi untuk mengecek bilangan prima
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Program utama untuk mengecek kategori bilangan dari 1 sampai 20
echo "Pengulangan untuk mencari kategori bilangan :<br>";
echo "<ul>"; // Membuat daftar yang diberi bullet point
for ($i = 1; $i <= 20; $i++) {
    // Cek apakah bilangan ganjil atau genap
    if ($i % 2 == 0) {
        $type = "bilangan genap";
    } else {
        $type = "bilangan ganjil";
    }

    // Cek apakah bilangan prima
    if (isPrime($i)) {
        $type .= " sekaligus bilangan prima";
    }

    // Output hasil pengecekan
    echo "<li>Angka $i adalah $type</li>";
}
echo "</ul>"; // Menutup daftar bullet point
?>