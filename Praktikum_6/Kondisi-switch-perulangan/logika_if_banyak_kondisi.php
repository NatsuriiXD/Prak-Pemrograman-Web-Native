<?php
$bilangan = $_POST["bilangan"];

if ($bilangan < 0){
    $str = "NEGATIF";
} elseif ($bilangan == 0) {
    $str = "NOL";
} else {
    $str = "POSITIF";
}

echo "$bilangan adalah bilangan $str";
?>