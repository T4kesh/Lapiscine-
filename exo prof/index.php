<?php

include 'rectangle.class.php';
include 'sphere.class.php';
include 'caddie.class.php';

//$rectangle = new Rectangle(5, 15);
//echo "Le rectangle a une hauteur de " . $rectangle->getHauteur();
//echo " et une longueur de " . $rectangle->getLongueur();
//echo "<br>";
//echo "L'aire est égale à : " . $rectangle->calculAire();
//echo "<br>";
//echo "Le périmètre est égale à : " . $rectangle->calculPerimetre();
//echo "<br>";
//
//
//$sphere = new Sphere(5);
//$sphere->setRayon(20);
//echo "La sphère a un rayon de " . $sphere->getRayon();
//echo " et donc un diamètre de " . $sphere->getDiametre();
//echo "<br>";
//echo "La circonférence est égale à : " . $sphere->calculCirconference();
//echo "<br>";
//echo "Le volume est égal à : " . $sphere->calculVolume();
//echo "<br>";
$user = new User('Bombeur', 'Jean');
$caddie = new Caddie();

$produit1 = new Product("Tomate en grappe 500g", 2.49);
$produit2 = new Product("Sel fin de l'île de Ré", 1.33);
$produit3 = new Product('Triple Karmeliet 75cl', 4.50);
$produit4 = new Product('Monster 50cl', 1.05);

$caddie->addProduct($produit1);
$caddie->addProduct($produit2);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit3);
$caddie->addProduct($produit4);

echo "Prix total : " . $caddie->getTotalPrice();
echo "<br>";
echo "Frais de livraison : " . $caddie->getDelivery();
echo "<br>";
echo "Nombre de produits : " . $caddie->getProductCount();
