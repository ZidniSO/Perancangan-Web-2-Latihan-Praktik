<?php
// lihat_mahasiswa.php
$file = 'mahasiswa.csv';
$data = [];

// Cek apakah file ada
if (file_exists($file)) {
    $fp = fopen($file, 'r');
    while (($row = fgetcsv($fp)) !== false) {
        $data[] = $row;
    }
    fclose($fp);
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Data Mahasiswa Terdaftar</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>📋 Daftar Mahasiswa Terdaftar</h1>
  <?php if (count($data) > 0): ?>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Email</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $i => $row): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($row[0] ?? '') ?></td>
            <td><?= htmlspecialchars($row[1] ?? '') ?></td>
            <td><?= htmlspecialchars($row[2] ?? '') ?></td>
            <td><?= htmlspecialchars($row[3] ?? '') ?></td>
            <td><?= htmlspecialchars($row[4] ?? '') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p class="warning">Belum ada data mahasiswa yang terdaftar.</p>
  <?php endif; ?>

  <div class="buttons">
    <a href="registrasi.php" class="btn">Tambah Data Baru</a>
  </div>
</div>
</body>
</html>
