<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "db_formulir");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
