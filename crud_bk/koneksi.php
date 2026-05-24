<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "2526_01 db"
);

if(!$koneksi){
    die("Koneksi gagal");
}

?>