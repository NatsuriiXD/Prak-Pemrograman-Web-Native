<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama     = $_POST['nama'];
    $alamat   = $_POST['alamat'];
    $jk       = $_POST['jenis_kelamin'];
    $agama    = $_POST['agama'];
    $sekolah  = $_POST['sekolah_asal'];

    // buat query INSERT
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // sukses
        header('Location: index.php?status=sukses');
    } else {
        // gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>