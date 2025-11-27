<?php
$n = $_POST["n"];

if (isset($n)) {
    $jumlah = 0;

    for ($i=1; $i <= $n; $i++) {
        if ($i != $n){
            echo "$i + ";
        } else {
            echo "$i = ";
        }
        $jumlah += $i;
    }
    echo $jumlah;
}
?>