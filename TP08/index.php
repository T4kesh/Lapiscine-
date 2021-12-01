<?php

include_once('caddie.class.php');
include_once('rectangle.class.php');


$rectangle1 = new Rectangle(12,3);
echo "Aire du rectangle : " . $rectangle1->calculAire() . " ";

$caddie1 = new Caddie (0, 5.5, ["electro-ménager"]);



