<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    mysqli_query($conn, "DELETE FROM siswa WHERE id='$id'");
    header("location:index.php");
}
?>
