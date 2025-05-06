<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian 10x10</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian 10 x 10</h2>
    <table>
        <tr>
            <th>&times;</th>
            <?php
            // Baris header (1-10)
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Isi tabel
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom header
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                echo "<td>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>