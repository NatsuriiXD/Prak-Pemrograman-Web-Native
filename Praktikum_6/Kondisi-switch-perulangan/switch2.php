<?php

$uts = $_POST["uts"];
$uas = $_POST["uas"];

// Menghitung nilai akhir, 40% UTS dan 60% UAS
$na = (0.4 * $uts) + (0.6 * $uas);

switch (true) {
    case ($na >= 80):
        $indeks = 'A';
        break;
    case ($na >= 70):
        $indeks = 'B';
        break;
    case ($na >= 50):
        $indeks = 'C';
        break;
    case ($na >= 40):
        $indeks = 'D';
        break;
    default:
        $indeks = 'E';
}

echo "Nilai UTS = $uts<br />";
echo "Nilai UAS = $uas<br />";
echo "Nilai Akhir = <strong>$na</strong><br />";
echo "Nilai Indeks = <strong>$indeks</strong>";

?>