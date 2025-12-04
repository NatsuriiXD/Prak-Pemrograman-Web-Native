<?php
$server = "127.0.0.1:3307";
$user = "root";
$pass = "";
$database = "database_baru";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {

    die("<script>alert('Gagal tersambung dengan database.')</script>");
} else {

    echo "Telah Terhubung dengan  database $database pada server $server";
}
