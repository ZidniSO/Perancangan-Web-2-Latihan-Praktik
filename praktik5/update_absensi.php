<?php
include 'koneksi.php';
$id_absensi = $_POST['id_absensi'];
$id_qr = $_POST['id_qr'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$status = $_POST['status'];
$sql = "UPDATE absensi 
        SET id_qr='$id_qr', tanggal='$tanggal', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar', status='$status'
        WHERE id_absensi='$id_absensi'";
if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Data absensi berhasil diperbarui!');
            window.location='tampil_absensi.php';
          </script>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}
?>