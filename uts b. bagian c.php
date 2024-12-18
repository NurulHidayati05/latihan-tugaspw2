<?php
// Daftar produk beserta informasi lengkap dalam bentuk array asosiatif
$barang = [
    ["ID" => 1, "Produk" => "Pepsodent", "Stok" => 30, "Harga" => 11980],
    ["ID" => 2, "Produk" => "Sunlight", "Stok" => 15, "Harga" => 12880],
    ["ID" => 3, "Produk" => "Baygon", "Stok" => 10, "Harga" => 16779],
    ["ID" => 3, "Produk" => "dave", "Stok" => 20, "Harga" => 22688],
    ["ID" => 4, "Produk" => "rinso", "Stok" => 20, "Harga" => 20769],
    ["ID" => 5, "Produk" => "Downy", "Stok" => 15, "Harga" => 12880],
    ["ID" => 6, "Produk" => "Le Mineral", "Stok" => 25, "Harga" => 5650]
];

// Menghitung total stok dan total harga semua produk
$totalStok = 0;
$totalHarga = 0;
foreach ($barang as $item) {
    $totalStok += $item['Stok'];
    $totalHarga += $item['Stok'] * $item['Harga'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Harga Barang</title>
</head>
<body>
    <h2>Tabel Harga Barang</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($barang as $item): ?>
            <tr>
                <td><?= $item['ID'] ?></td>
                <td><?= $item['Produk'] ?></td>
                <td><?= $item['Stok'] ?></td>
                <td>Rp <?= number_format($item['Harga'], 0, ',', '.') ?></td>
                <td>Rp <?= number_format($item['Stok'] * $item['Harga'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2"><strong>Total</strong></td>
            <td><strong><?= $totalStok ?></strong></td>
            <td colspan="2"><strong>Rp <?= number_format($totalHarga, 0, ',', '.') ?></strong></td>
        </tr>
    </table>
</body>
</html>