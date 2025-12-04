<?php
include "koneksi.php";

if (isset($_POST['submit'])) {

    $nama   = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password']; // bisa di-hash kalau mau
    $jenkel = $_POST['jenkel'];
    $tanggal = $_POST['tanggal'];
    $agama  = $_POST['agama'];
    $email = $_POST['email'];

    // Checkbox → jika tidak dicentang nilainya kosong, makanya pakai ternary
    $web_native = isset($_POST['web_native']) ? 1 : 0;
    $web_framework = isset($_POST['web_framework']) ? 1 : 0;
    $mobile_native = isset($_POST['mobile_native']) ? 1 : 0;
    $web_lintas_platform = isset($_POST['web_lintas_platform']) ? 1 : 0;

    $alamat = $_POST['alamat'];

    $query = "INSERT INTO peserta 
        (nama, username, password, jenkel, tanggal, agama, email,
         web_native, web_framework, mobile_native, web_lintas_platform, alamat)
    VALUES 
        ('$nama', '$username', '$password', '$jenkel', '$tanggal', '$agama', '$email',
         '$web_native', '$web_framework', '$mobile_native', '$web_lintas_platform', '$alamat')";

    if (mysqli_query($koneksi, $query)) {
        echo "<h2>Data berhasil disimpan!</h2>";
        echo "<a href='form.php'>Kembali</a>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
