<?php
include 'koneksi.php';

$query = "SELECT * FROM tanggapan";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tanggapan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Tanggapan</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th>Minat</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['alamat']}</td>
                            <td>{$row['jekel']}</td>
                            <td>{$row['tgl_lahir']}</td>
                            <td>{$row['jurusan']}</td>
                            <td>{$row['minat']}</td>
                            <td>{$row['gambar']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>