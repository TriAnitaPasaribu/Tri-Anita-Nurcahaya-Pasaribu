<!DOCTYPE html>
<html>
<head>
    <title>Formulir dan Tabel</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Formulir Input Data</h2>
<form method="post" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur" required><br><br>

    <input type="submit" name="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyimpan data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $umur = (int)$_POST['umur'];

    echo "<h2>Data yang Dikirim:</h2>";
    echo "<table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Umur</th>
            </tr>
            <tr>
                <td>$nama</td>
                <td>$email</td>
                <td>$umur</td>
            </tr>
        </table>";
}
?>

</body>
</html>
