<?php
include 'koneksi.php';
if (!isset($_GET['del'])) {
    header("Location: tampil_foto.php");
    exit;
}
$del = (int)$_GET['del'];
$result = mysqli_query($koneksi, "SELECT foto FROM namasiswa WHERE id='$del'");
$data = mysqli_fetch_assoc($result);
if (!empty($data['foto']) && file_exists("gambar/".$data['foto'])) {
    unlink("gambar/".$data['foto']);
}
mysqli_query($koneksi, "DELETE FROM namasiswa WHERE id='$del'");
header("Location: tampil_foto.php?pesan=hapus_sukses");
exit;
?>