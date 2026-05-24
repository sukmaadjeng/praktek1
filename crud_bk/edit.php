<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM guru_bk WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi,
    "UPDATE guru_bk SET
    nama='$nama',
    bidang='$bidang',
    deskripsi='$deskripsi'
    WHERE id='$id'
    ");

    header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <h2>Edit Data Guru BK</h2>

        <form method="POST">

            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">

            <input type="text" name="bidang" value="<?php echo $d['bidang']; ?>">

            <textarea name="deskripsi"><?php echo $d['deskripsi']; ?></textarea>

            <button type="submit" name="submit" class="btn btn-edit">
                Update
            </button>

        </form>

    </div>

</div>

</body>
</html>