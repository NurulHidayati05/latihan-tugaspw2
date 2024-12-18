<?php
// Daftar produk beserta stok dan harga
$barang = [
    ["ID" => 1, "Produk" => "Pepsodent", "Stok" => 30, "Harga" => 11980],
    ["ID" => 2, "Produk" => "Sunlight", "Stok" => 15, "Harga" => 12880],
    ["ID" => 3, "Produk" => "Biore", "Stok" => 10, "Harga" => 16779],
    ["ID" => 4, "Produk" => "Dove", "Stok" => 20, "Harga" => 22688],
    ["ID" => 5, "Produk" => "Downy", "Stok" => 15, "Harga" => 12880],
    ["ID" => 6, "Produk" => "Le Mineral", "Stok" => 25, "Harga" => 15500]
];

$total = 0;
$totalDiskon = 0;
$struk = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah = $_POST['jumlah'];
    $tanggal = date("d M Y");

    // Membangun struk belanja
    $struk .= "<h2>Struk Belanja</h2>";
    $struk .= "<p>Tanggal: $tanggal</p>";
    $struk .= "<table border='1' cellspacing='0' cellpadding='5'>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Subtotal</th>
                </tr>";

    // Menghitung total belanja dan membuat rincian struk
    foreach ($barang as $item) {
        $id = $item['ID'];
        $jmlBeli = isset($jumlah[$id]) ? (int)$jumlah[$id] : 0;
        if ($jmlBeli > 0) {
            $subtotal = $jmlBeli * $item['Harga'];
            $total += $subtotal;

            // Tambahkan data produk ke struk
            $struk .= "<tr>
                        <td>{$item['Produk']}</td>
                        <td>{$jmlBeli}</td>
                        <td>Rp " . number_format($item['Harga'], 0, ',', '.') . "</td>
                        <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
                      </tr>";
        }
    }

    // Menghitung diskon
    if ($total >= 200000 && $total < 300000) {
        $totalDiskon = $total * 0.2;
    } elseif ($total >= 300000) {
        $totalDiskon = $total * 0.25;
    }

    $totalAkhir = $total - $totalDiskon;

    // Menambahkan total, diskon, dan total akhir ke struk
    $struk .= "<tr>
                <td colspan='3'><strong>Total</strong></td>
                <td><strong>Rp " . number_format($total, 0, ',', '.') . "</strong></td>
              </tr>";
    $struk .= "<tr>
                <td colspan='3'>Diskon</td>
                <td>Rp " . number_format($totalDiskon, 0, ',', '.') . "</td>
              </tr>";
    $struk .= "<tr>
                <td colspan='3'><strong>Total Akhir</strong></td>
                <td><strong>Rp " . number_format($totalAkhir, 0, ',', '.') . "</strong></td>
              </tr>";
    $struk .= "</table>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Belanja</title>
</head>
<body>
    <h2>Form Pembelian</h2>
    <form method="post">
        <?php foreach ($barang as $item): ?>
            <label><?= $item['Produk'] ?> (Harga: Rp <?= number_format($item['Harga'], 0, ',', '.') ?>): </label>
            <input type="number" name="jumlah[<?= $item['ID'] ?>]" min="0" max="<?= $item['Stok'] ?>" value="0"><br>
        <?php endforeach; ?>
        <button type="submit">Hitung Total</button>
    </form>

    <!-- Tampilkan struk belanja jika form disubmit -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $total > 0): ?>
        <?= $struk ?>
    <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $total == 0): ?>
        <p><strong>Harap masukkan jumlah barang yang ingin dibeli.</strong></p>
    <?php endif; ?>
</body>
</html>