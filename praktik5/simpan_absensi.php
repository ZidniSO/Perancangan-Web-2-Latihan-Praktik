<?php
include 'koneksi.php';
$id_absensi = $_POST['id_absensi'];
$id_qr = $_POST['id_qr'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$status = $_POST['status'];
$sql = "INSERT INTO absensi (id_absensi, id_qr, tanggal, jam_masuk, jam_keluar, status)
        VALUES ('$id_absensi', '$id_qr', '$tanggal', '$jam_masuk', '$jam_keluar', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Data absensi berhasil disimpan!');
            window.location='tampil_absensi.php';
          </script>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}
mysqli_close($conn);
?>