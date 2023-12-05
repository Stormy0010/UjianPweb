<?php
include 'koneksi.php';

if (isset($_GET['id']) && isset($_POST['submit'])) {
    $id = $_GET['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel']; // Mengubah '$kelas' menjadi '$jkel'

    mysqli_query($conn, "UPDATE siswa SET npm='$npm', nama='$nama', jkel='$jkel' WHERE id='$id'"); // Mengubah 'kelas' menjadi 'jkel'
    header("location:index.php");
}
?>
