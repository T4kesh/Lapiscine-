<?php

class Rectangle
{
    private float $longueur ;
    private float $hauteur;

    public function __construct (float $l , float $h){
        $this->hauteur = $h;
        $this->longueur = $l;
    }
    public function getLongueur() {
        return $this->longueur;
    }
    public function setLongueur($l) {
        $this->longueur = $l;
    }
    public function calculAire() {
        return ($this->longueur * $this->hauteur);
    }
    public function __destruct() {
    }

}