<?php
include("config.php");

// cek apakah id tersedia di URL
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data siswa
$sql = "SELECT * FROM calon_siswa WHERE id = $id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Siswa</title>
</head>

<body>
    <header>
        <h3>Form Edit Data Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>

        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>" />

        <p>
            <label>Nama: </label>
            <input type="text" name="nama" value="<?php echo $siswa['nama']; ?>" />
        </p>

        <p>
            <label>Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat']; ?></textarea>
        </p>

        <p>
            <label>Jenis Kelamin: </label>
            
            <?php $jk = $siswa['jenis_kelamin']; ?>

            <label><input type="radio" name="jenis_kelamin" value="laki-laki" 
                <?php echo ($jk == 'laki-laki') ? "checked" : ""; ?>>
                Laki-laki
            </label>

            <label><input type="radio" name="jenis_kelamin" value="perempuan" 
                <?php echo ($jk == 'perempuan') ? "checked" : ""; ?>>
                Perempuan
            </label>
        </p>

        <p>
            <label>Agama: </label>
            <select name="agama">
                <?php
                $agama_arr = ['Islam','Kristen','Hindu','Budha','Atheis'];
                foreach ($agama_arr as $a) {
                    $selected = ($siswa['agama'] == $a) ? "selected" : "";
                    echo "<option $selected>$a</option>";
                }
                ?>
            </select>
        </p>

        <p>
            <label>Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal']; ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
    </form>

</body>
</html>