<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jadwal Kerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            padding: 30px;
        }
        form {
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<h2 align="center">Form Input Jadwal Kerja</h2>
<form action="simpan_jadwal_kerja.php" method="POST">
    <label for="id_jadwal_kerja">ID Jadwal Kerja</label>
    <input type="text" name="id_jadwal_kerja" id="id_jadwal_kerja" maxlength="20" required>
    <label for="id_pegawai">ID Pegawai</label>
    <select name="id_pegawai" id="id_pegawai" required>
        <option value="">-- Pilih Pegawai --</option>
        <option value="PG001">PG001 - Zidni Nur Fahma</option>
        <?php
        include 'koneksi.php';
        $result = mysqli_query($conn, "SELECT id_pegawai, nama_pegawai FROM pegawai");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row['id_pegawai']."'>".$row['id_pegawai']." - ".$row['nama_pegawai']."</option>";
        }
        ?>
    </select>
    <label for="hari">Hari</label>
    <select name="hari" id="hari" required>
        <option value="">-- Pilih Hari --</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
    <label for="jam_mulai">Jam Mulai</label>
    <input type="time" name="jam_mulai" id="jam_mulai" required>
    <label for="jam_selesai">Jam Selesai</label>
    <input type="time" name="jam_selesai" id="jam_selesai" required>
    <label for="keterangan">Keterangan</label>
    <input type="text" name="keterangan" id="keterangan" maxlength="50">
    <button type="submit">Simpan</button>
</form>
</body>
</html>