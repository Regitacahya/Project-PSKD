<?php
$koneksi = mysqli_connect("localhost", "root", "","skd");

//cek koneksi dah berhasil atau belum

if (mysqli_connect_error()){
    echo "Koneksi Database gagal : " . mysqli_connect_error();
}
?>