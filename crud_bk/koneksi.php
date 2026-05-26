<?php

$koneksi = mysqli_connect(
    "localhost",
    "2526_01",
    "12345678",
    "2526_01db"
);

if(!$koneksi){
    die("Koneksi gagal");
}

?>