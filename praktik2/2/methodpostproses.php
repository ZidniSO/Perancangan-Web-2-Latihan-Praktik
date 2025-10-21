<html>
<head>
    <title>Method POST Proses</title>
</head>
<body>
    <?php
        // Ambil data dari form menggunakan metode POST
        $nama = $_POST["nama"];

        // Tampilkan hasil
        echo "Data nama yang diinputkan adalah : " . $nama;
    ?>
</body>
</html>