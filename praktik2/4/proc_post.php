<!DOCTYPE html>
<html>
<head>
    <title>Perbandingan Bilangan</title>
</head>
<body>
    <h1>Perbandingan Bilangan</h1>
    <hr>
    <?php
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    if ($bil1 > $bil2) {
        echo "$bil1 lebih besar dari $bil2";
    } elseif ($bil1 < $bil2) {
        echo "$bil2 lebih besar dari $bil1";
    } else {
        echo "$bil1 sama dengan $bil2";
    }
    ?>
</body>
</html>
