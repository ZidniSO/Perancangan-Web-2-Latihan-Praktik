<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_sistem_pegawai_qr";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>