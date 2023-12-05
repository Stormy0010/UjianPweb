<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jkel = $_POST['jkel']; // Mengubah '$kelas' menjadi '$jkel'

mysqli_query($conn, "insert into siswa values('0', '$npm', '$nama', '$jkel')"); // Mengubah 'kelas' menjadi 'jkel'

header("location:index.php");
?>
