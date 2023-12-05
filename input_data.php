<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data Diri Anda</h1>
    <form action="action.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td> <!-- Mengubah 'KELAS' menjadi 'JENIS KELAMIN' -->
                <td><input type="text" name="jkel"></td> <!-- Mengubah 'kelas' menjadi 'jkel' -->
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
                <td><button> <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button> 
                <td><button><a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a></button> </td>
            </tr>
            
        </table>
    </form>
</body>
</html>