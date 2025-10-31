<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Laporan Kehadiran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            padding: 40px 0;
        }
        .container {
            width: 450px;
            margin: auto;
            background: #fff;
            border-radius: 12px;
            padding: 25px 25px 30px 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
        }
        input, select {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            background: #007bff;
            color: #fff;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover {
            background: #005ec4;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Input Laporan Kehadiran</h2>
    <form action="simpan_laporan.php" method="POST">
        <label for="id_laporan">ID Laporan</label>
        <input type="text" name="id_laporan" id="id_laporan" maxlength="20" required>
        <label for="id_pegawai">ID Pegawai</label>
        <select name="id_pegawai" id="id_pegawai" required>
            <option value="">-- Pilih Pegawai --</option>
            <option value="PG001">PG001 - Zidni Nur Fahma</option>
            <?php
            if ($conn) {
                $q = mysqli_query($conn, "SELECT id_pegawai, nama_pegawai FROM pegawai ORDER BY nama_pegawai ASC");
                while ($r = mysqli_fetch_assoc($q)) {
                    echo "<option value='".$r['id_pegawai']."'>".$r['id_pegawai']." - ".$r['nama_pegawai']."</option>";
                }
            } else {
                echo "<option disabled>Koneksi database gagal</option>";
            }
            ?>
        </select>
        <label for="periode">Periode (Bulan/Tahun)</label>
        <input type="text" name="periode" id="periode" maxlength="15" placeholder="Misal: Oktober/2025" required>
        <label for="total_hadir">Total Hadir</label>
        <input type="number" name="total_hadir" id="total_hadir" min="0" required>
        <label for="total_izin">Total Izin</label>
        <input type="number" name="total_izin" id="total_izin" min="0" required>
        <label for="total_alpha">Total Alpa</label>
        <input type="number" name="total_alpa" id="total_alpa" min="0" required>
        <label for="dibuat_oleh">Dibuat Oleh</label>
        <input type="text" name="dibuat_oleh" id="dibuat_oleh" maxlength="10" placeholder="Username admin" required>
        <button type="submit">Simpan Laporan</button>
    </form>
</div>
</body>
</html>