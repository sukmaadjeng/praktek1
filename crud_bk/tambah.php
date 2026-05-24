<?php

include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi,
    "INSERT INTO guru_bk VALUES(
    '',
    '$nama',
    '$bidang',
    '$deskripsi'
    )");

    header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <h2>Tambah Data Guru BK</h2>
        <form method="POST">

            <input type="text" name="nama" placeholder="Nama Guru" required>

            <input type="text" name="bidang" placeholder="Bidang BK" required>

            <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>

            <button type="submit" name="submit" class="btn btn-tambah">
                Simpan
            </button>

        </form>

    </div>

</div>

</body>
</html>