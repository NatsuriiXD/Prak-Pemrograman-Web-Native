<?php
include("config.php");

// cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {

    // ambil data dari form edit
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // query update
    $sql = "UPDATE calon_siswa SET 
                nama='$nama',
                alamat='$alamat',
                jenis_kelamin='$jk',
                agama='$agama',
                sekolah_asal='$sekolah'
            WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>