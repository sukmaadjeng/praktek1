<?php

session_start();

if(!isset($_SESSION['login'])){
    header("location:login.php");
}

include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM guru_bk *");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Guru BK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <h1 class="judul">
    DATAA GURU BIMBINGAN KONSELING <br>
    SMKN 2 BALEENDAH
</h1>

        <a href="tambah.php" class="btn btn-tambah">
            + Tambah Data
        </a>

        <a href="logout.php" class="btn btn-hapus">
            Logout
        </a>

        <table class="table">

            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Bidang</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 1;
            while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['bidang']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
                <td>

                    <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-edit">
                        Edit
                    </a>

                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-hapus">
                        Hapus
                    </a>

                </td>
            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>