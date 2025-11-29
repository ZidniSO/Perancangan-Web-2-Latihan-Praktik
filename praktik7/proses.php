<?php
include "koneksi.php";
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];
$folder = "gambar/";
$nama_baru = rand(1000,99999) . "_" . $foto;
move_uploaded_file($tmp, $folder . $nama_baru);
mysqli_query($koneksi, 
    "INSERT INTO namasiswa (nama, foto) VALUES ('$nama', '$nama_baru')"
);
echo "Berhasil upload!<br>";
echo "<img src='gambar/$nama_baru' height='200'><br><br>";
echo "<a href='tampil_foto.php'>Lihat Semua Foto</a>";
?>