<?php
$n = $_POST["n"];

if (isset($n)) {
    $jumlah = 0;
    $i = 1;

    do {
        if ($i != $n) {
            echo "$i + ";
        } else {
            echo "$i = ";
        }
        $jumlah += $i;
        $i++;
    } while ($i <= $n);

    echo $jumlah;
}
?>