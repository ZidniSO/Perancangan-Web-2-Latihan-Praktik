<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
</head>
<body>
<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
?>
<h1>Data Buku Tamu</h1>
<hr>
<p>Nama Anda: <strong><?php echo $nama; ?></strong></p>
<p>Email Address: <strong><?php echo $email; ?></strong></p>
<p>Komentar:</p>
<textarea name="komentar" cols="40" rows="5" readonly><?php echo $komentar; ?></textarea>
<br>
</body>
</html>
