<?php
$angka = $_POST["angka"];

if ($angka < 1 || $angka > 10){
    echo "Bilangan yang anda masukan adalah $angka";
    exit();
}

echo "ERROR: bilangan harus dalam rentang 1 sampai 10.";
?>