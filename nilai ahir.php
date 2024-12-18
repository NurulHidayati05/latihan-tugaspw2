<?php
function hitungluasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// Contoh penggunaan fungsi

$panjang = 10;
$lebar = 5;

echo "luas persegi panjang adalah: " .hitungLuasPersegiPanjang($panjang, $lebar);
?>