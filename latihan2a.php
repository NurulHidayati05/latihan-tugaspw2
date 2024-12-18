<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Looping PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>
        <?php
        // Menentukan jumlah baris dan kolom
        $baris = 15;
        $kolom = 5;

        // Loop untuk menampilkan baris
        for ($i = 1; $i <= $baris; $i++) {
            echo "<tr>";
            // Loop untuk menampilkan kolom di setiap baris
            for ($j = 1; $j <= $kolom; $j++) {
                echo "<td>Baris $i Kolom $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>