<?php
echo "Tes Psikotes Deret Angka<br><br>";

// Deret a
$a = [4, 6, 9, 13, 18];
for ($i = 5; $i < 7; $i++) {
    $selisih = ($i + 1); // karena selisih bertambah 1 setiap langkah
    $a[] = end($a) + $selisih;
}
echo "a. " . implode(" ", $a) . "<br>";

// Deret b
$b = [2, 2, 3, 3, 4];
$b[] = 4;
$b[] = 5;
echo "b. " . implode(" ", $b) . "<br>";

// Deret c
$c = [1, 9, 2, 10, 3];
$c[] = 11;
$c[] = 4;
echo "c. " . implode(" ", $c) . "<br>";
?>
