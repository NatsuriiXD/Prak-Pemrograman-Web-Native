<?php
$n = $_POST["n"];

if (isset($n)) {
    $jumlah = 0;
    $i = 1;

    while ($i <= $n) {
        if ($i != $n) {
            echo "$i + ";
        } else {
            echo "$i = ";
        }
        $jumlah += $i;
        $i++;
    }
    echo $jumlah;
}
?>