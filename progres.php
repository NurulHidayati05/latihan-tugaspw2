<?php
session_start();

// Simulasi database produk
$produk = [
    1 => ['nama' => 'Produk 1', 'harga' => 100000],
    2 => ['nama' => 'Produk 2', 'harga' => 200000],
];

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   // Debugging
    var_dump($username, $password); // Tambahkan ini untuk melihat nilai yang dimasukkan

    if ($username == 'user' && $password == 'password') {
        $_SESSION['username'] = $username;
    } else {
        $error = "Username atau password salah!";
    }
}

// Proses menambahkan ke keranjang
if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];
    if (!isset($_SESSION['keranjang'])) {
        $_SESSION['keranjang'] = [];
    }
    $_SESSION['keranjang'][] = $id;
}

// Proses checkout
if (isset($_POST['checkout'])) {
    // Proses checkout bisa ditambahkan di sini
    echo "<script>alert('Pembelian berhasil!');</script>";
    $_SESSION['keranjang'] = []; // Kosongkan keranjang setelah checkout
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
</head>
<body>
    <h1>Selamat datang di Toko Online</h1>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Halo, <?php echo $_SESSION['username']; ?>! <a href="?logout=1">Logout</a></p>
        <h2>Keranjang Belanja</h2>
        <ul>
            <?php
            if (isset($_SESSION['keranjang'])) {
                foreach ($_SESSION['keranjang'] as $id) {
                    echo "<li>{$produk[$id]['nama']} - Rp " . number_format($produk[$id]['harga']) . "</li>";
                }
            } else {
                echo "<li>Keranjang kosong</li>";
            }
            ?>
        </ul>
        <form method="post">
            <button type="submit" name="checkout">Checkout</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <h2>Produk</h2>
    <ul>
        <?php foreach ($produk as $id => $item): ?>
            <li>
                <a href="#"><?php echo $item['nama']; ?></a>
                <p>Harga: Rp <?php echo number_format($item['harga']); ?></p>
                <?php if (isset($_SESSION['username'])): ?>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="add_to_cart">Tambahkan ke Keranjang</button>
                    </form>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
    // Proses logout
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
        exit;
    }
    ?>
</body>
</html>