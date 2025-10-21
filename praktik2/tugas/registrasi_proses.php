<?php
// registrasi_proses.php

function sanitize($s){ return trim(htmlspecialchars($s)); }

$nim = isset($_POST['nim']) ? sanitize($_POST['nim']) : '';
$nama = isset($_POST['nama']) ? sanitize($_POST['nama']) : '';
$jurusan = isset($_POST['jurusan']) ? sanitize($_POST['jurusan']) : '';
$email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
$alamat = isset($_POST['alamat']) ? sanitize($_POST['alamat']) : '';

// simple validation
$errors = [];
if ($nim === '') $errors[] = "NIM wajib diisi.";
if ($nama === '') $errors[] = "Nama wajib diisi.";
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";

if (!empty($errors)) {
  echo "<h1>Terjadi kesalahan:</h1><ul>";
  foreach($errors as $e) echo "<li>" . $e . "</li>";
  echo "</ul><p><a href='registrasi.php'>Kembali</a></p>";
  exit;
}

// Simpan ke CSV
$file = 'mahasiswa.csv';
$line = [$nim, $nama, $jurusan, $email, $alamat];
$fp = fopen($file, 'a');
if ($fp === false) {
  die("Gagal membuka file penyimpanan.");
}
fputcsv($fp, $line);
fclose($fp);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Registrasi Sukses</title></head>
<body>
  <h1>Registrasi Berhasil</h1>
  <p>Data berikut telah disimpan:</p>
  <ul>
    <li>NIM: <?php echo $nim; ?></li>
    <li>Nama: <?php echo $nama; ?></li>
    <li>Jurusan: <?php echo $jurusan; ?></li>
    <li>Email: <?php echo $email; ?></li>
    <li>Alamat: <?php echo nl2br($alamat); ?></li>
  </ul>
  <p><a href="registrasi.php">Tambah Mahasiswa Lagi</a></p>
  <p><a href="mahasiswa.php">Lihat semua mahasiswa</a> (opsional)</p>
</body>
</html>
