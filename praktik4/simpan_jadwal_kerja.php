<?php
include 'koneksi.php';
$id_laporan   = $_POST['id_laporan'];
$id_pegawai   = $_POST['id_pegawai'];
$periode      = $_POST['periode'];
$total_hadir  = $_POST['total_hadir'];
$total_izin   = $_POST['total_izin'];
$total_alpha  = $_POST['total_alpha'];
$dibuat_oleh  = $_POST['dibuat_oleh'];
$sql = "INSERT INTO laporan_kerja (id_laporan, id_pegawai, periode, total_hadir, total_izin, total_alpha, dibuat_oleh)
        VALUES ('$id_laporan', '$id_pegawai', '$periode', '$total_hadir', '$total_izin', '$total_alpha', '$dibuat_oleh')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data laporan kerja berhasil disimpan!'); window.location='laporan_kerja.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>