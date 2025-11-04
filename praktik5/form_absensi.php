<!DOCTYPE html>
<html>
<head>
    <title>Form Absensi Pegawai</title>
    <style>
        body {font-family: Arial; background: #f2f2f2; padding: 30px;}
        form {background: white; width: 400px; margin: auto; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);}
        input, select, button {width: 100%; padding: 8px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc;}
        button {background: #007bff; color: white; border: none; cursor: pointer;}
        button:hover {background: #0056b3;}
        .link {text-align: center; margin-top: 10px;}
    </style>
</head>
<body>
<h2 align="center">Form Absensi Pegawai</h2>
<form method="POST" action="simpan_absensi.php">
    <label>ID Absensi</label>
    <input type="text" name="id_absensi" placeholder="Contoh: ABS001" required>
    <label>ID QR</label>
    <input type="text" name="id_qr" placeholder="Masukkan ID QR" required>
    <label>Tanggal</label>
    <input type="date" name="tanggal" required>
    <label>Jam Masuk</label>
    <input type="time" name="jam_masuk">
    <label>Jam Keluar</label>
    <input type="time" name="jam_keluar">
    <label>Status</label>
    <select name="status" required>
        <option value="">-- Pilih Status --</option>
        <option value="Hadir">Hadir</option>
        <option value="Izin">Izin</option>
        <option value="Alpa">Alpa</option>
        <option value="Sakit">Sakit</option>
    </select>
    <button type="submit">Simpan</button>
</form>
<div class="link">
    <a href="tampil_absensi.php">Lihat Data Absensi</a>
</div>
</body>
</html>