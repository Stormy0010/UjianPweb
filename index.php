<?php
include 'koneksi.php';

// Fungsi untuk menampilkan data
function displayData() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM siswa");
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['NPM'] . "</td>";
        echo "<td>" . $row['NAMA'] . "</td>";
        echo "<td>" . $row['JKEL'] . "</td>"; // Mengubah 'KELAS' menjadi 'JKEL'
        echo "<td> <a href='edit.php?id=" . $row['ID'] . "'>Edit</a></td>";
        echo "<td><a href='delete.php?id=" . $row['ID'] . "'>Delete</a></td>";
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Siswa Kelas 3IA19</h1>
    <table>
        <tr>
            <th>NPM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th> <!-- Mengubah 'KELAS' menjadi 'JENIS KELAMIN' -->
            <th></th>
            <th></th>
        </tr>
        <?php
        displayData();
        ?>
    </table>
    <br>
     <button><a href="input_data.php">Tambah Data</a></button>
</body>
</html>
