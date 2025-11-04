<?php
include 'koneksi.php';
$id_absensi = $_GET['id_absensi'];
$sql = "SELECT * FROM absensi WHERE id_absensi='$id_absensi'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Absensi</title>
    <style>
        body {font-family: Arial; background: #f2f2f2; padding: 30px;}
        form {background: white; width: 400px; margin: auto; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);}
        input, select, button {width: 100%; padding: 8px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc;}
        button {background: #28a745; color: white; border: none; cursor: pointer;}
        button:hover {background: #218838;}
    </style>
</head>
<body>
<h2 align="center">Edit Data Absensi</h2>
<form method="POST" action="update_absensi.php">
    <label>ID Absensi</label>
    <input type="text" name="id_absensi" value="<?= $data['id_absensi']; ?>" readonly>
    <label>ID QR</label>
    <input type="text" name="id_qr" value="<?= $data['id_qr']; ?>" required>
    <label>Tanggal</label>
    <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required>
    <label>Jam Masuk</label>
    <input type="time" name="jam_masuk" value="<?= $data['jam_masuk']; ?>">
    <label>Jam Keluar</label>
    <input type="time" name="jam_keluar" value="<?= $data['jam_keluar']; ?>">
    <label>Status</label>
    <select name="status" required>
        <option value="Hadir" <?= $data['status']=='Hadir'?'selected':''; ?>>Hadir</option>
        <option value="Izin" <?= $data['status']=='Izin'?'selected':''; ?>>Izin</option>
        <option value="Alpa" <?= $data['status']=='Alpa'?'selected':''; ?>>Alpa</option>
        <option value="Sakit" <?= $data['status']=='Sakit'?'selected':''; ?>>Sakit</option>
    </select>
    <button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>