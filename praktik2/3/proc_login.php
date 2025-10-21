<html>
<head>
    <title>Proses Input</title>
</head>
<body>
    <?php
        // Ambil data dari form POST
        $username = $_POST["username"];
        $password = $_POST["password"];
    ?>

    <h2>Hasil Input</h2>
    Username : <?php echo $username; ?><br>
    Password : <?php echo $password; ?><br>
</body>
</html>