<?php
include("config.php");

// cek apakah id dikirimkan
if (!isset($_GET['id'])) {
    die("Akses dilarang...");
}

$id = $_GET['id'];

// query hapus
$sql = "DELETE FROM calon_siswa WHERE id = $id";
$query = mysqli_query($conn, $sql);

if ($query) {
    header('Location: list-siswa.php?status=hapus_sukses');
} else {
    die("Gagal menghapus...");
}
?>