<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,
"DELETE FROM guru_bk WHERE id='$id'");

header("location:index.php");

?>