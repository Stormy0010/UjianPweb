<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
    $row = mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="update.php?id=<?php echo $id; ?>" method="post">
        <input type="text" name="npm" value="<?php echo $row['NPM']; ?>" placeholder="NPM">
        <input type="text" name="nama" value="<?php echo $row['NAMA']; ?>" placeholder="Nama">
        <input type="text" name="jkel" value="<?php echo $row['JKEL']; ?>" placeholder="Jenis Kelamin"> <!-- Mengubah 'kelas' menjadi 'jkel' -->
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
