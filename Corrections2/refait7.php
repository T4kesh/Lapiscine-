<?php

//Ecrire le programme qui calcule la somme des 30 premiers entiers (privés de l’entier 0), c'est-à-dire 1+2+3+4+...+28+29+30. 

$max = 30;
$somme = 0;
$message = "";

for ($i = 1 ; $i <= $max ; $i += 1 ){

    $somme = $somme + $i ;
    $message = $message . $i;

    if ( $i < $max ) {
        $message = $message . " + ";
    }
}

echo $message . " = " . $somme;
?>