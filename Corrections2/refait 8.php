<?php

$max = 30;
$Total = 0;
$message = "";


for ( $i = 1 ; $i <= $max ; $i += 1 ) {
    $somme = $somme + $i;
    $message .= $i;
    
    
    if ( $i < $max) {
        $message.= " + ";
    }
}
$message.= $somme;

echo $message;
?>