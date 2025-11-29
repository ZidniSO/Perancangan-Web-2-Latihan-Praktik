<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM namasiswa ORDER BY id DESC");
?>
<h2>Daftar Foto Siswa</h2>
<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Foto</th>
    <th>Delete</th>
</tr>
<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><img src="gambar/<?php echo $row['foto']; ?>" height="100"></td>
    <td>
        <a href="delete.php?del=<?php echo $row['id']; ?>" 
           onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
<br><a href="input_foto.php">Upload Lagi</a>