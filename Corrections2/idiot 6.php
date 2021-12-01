<?php

$max = 25;
$message = "";


for ( $i = 1 ; $i <= $max ; $i += 1) {
    for ( $j= 1 ; $j <= $i ; $j +=1 ) {
        $message.= $j . " ";
    }
    $message.= "<br>";
}

echo $message;
?>