<?php

$koneksi = mysqli_connect(
    "localhost",    // Menambahkan host
    "2526_01",      // Username database
    "12345678",     // Memperbaiki tanda petik yang kurang
    "2526_01_db"    // Menyesuaikan nama database agar tidak ada spasi jika berupa string
);

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>