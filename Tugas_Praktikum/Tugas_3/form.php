<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
</head>
<body>

  <form action="proses.php" method="POST">
    <fieldset>
      <legend><h1>Formulir Peserta</h1></legend>

      <p>
        <label>Nama :</label>
        <input type="text" name="nama" required placeholder="Masukan nama lengkap">
      </p>

      <p>
        <label>Username :</label>
        <input type="text" name="username" required placeholder="Masukan username">
      </p>

      <p>
        <label>Password :</label>
        <input type="password" name="password" required placeholder="Masukan password">
      </p>

      <p>
        <label>Jenis Kelamin :</label>
        <input type="radio" name="jenkel" value="laki-laki" required>Laki-laki
        <input type="radio" name="jenkel" value="perempuan">Perempuan
      </p>

      <p>
        <label>Tanggal Lahir :</label>
        <input type="date" name="tanggal" required>
      </p>

      <p>
        <label>Agama :</label>
        <select name="agama">
          <option value="budha">Budha</option>
          <option value="hindu">Hindu</option>
          <option value="islam">Islam</option>
          <option value="katholik">Kristen Katholik</option>
          <option value="protestan">Kristen Protestan</option>
        </select>
      </p>

      <p>
        <label>Email :</label>
        <input type="email" name="email" required placeholder="Masukkan email">
      </p>

      <p>
        <label>Pilih Course:</label><br>
        <input type="checkbox" name="web_native" value="1"> Web Native
        <input type="checkbox" name="web_framework" value="1"> Web Framework
        <input type="checkbox" name="mobile_native" value="1"> Mobile Native
        <input type="checkbox" name="web_lintas_platform" value="1"> Mobile Lintas Platform
      </p>

      <p>
        <label>Alamat :</label><br>
        <textarea name="alamat" cols="50" rows="10" required></textarea>
      </p>

      <p>
        <input type="submit" name="submit" value="Daftar">
      </p>

      <li><a href="../Praktikum_2/test1.html"> Kembali ke Beranda</a></li>

    </fieldset>
  </form>

</body>
</html>
