<!doctype html>
<html>
<head><meta charset="utf-8"><title>Registrasi Mahasiswa Baru</title></head>
<body>
  <h1>Form Registrasi Mahasiswa Baru</h1>
  <form action="registrasi_proses.php" method="post">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Jurusan: <input type="text" name="jurusan" required><br>
    Email: <input type="email" name="email" required><br>
    Alamat: <textarea name="alamat" cols="40" rows="4"></textarea><br>
    <input type="submit" value="Daftar">
  </form>
</body>
</html>