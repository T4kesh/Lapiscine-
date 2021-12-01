<?php

$array = [4, 62, 0, -6, 23, 10, -4, 4, 12];
$tmp = [];
var_dump($array);


for each ($array as $croissant) {
    if ($croissant <= $min) {
        $tmp[] = $croissant;
    }
    echo $tmp;
}










function minimmum($array) {
    $min = $array[0];

    foreach ($array as $nombre) {
        if ($nombre < $min) {
            $min = $nombre;
        }
    }
    return $min;
}


?>