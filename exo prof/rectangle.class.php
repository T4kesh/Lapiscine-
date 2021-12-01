<?php

class Rectangle {

    private float $longueur;
    private float $hauteur;

    public function __construct(float $h, float $l)
    {
        $this->longueur = $l;
        $this->hauteur = $h;
    }

    public function getLongueur(): float
    {
        return $this->longueur;
    }

    public function setLongueur(float $longueur): self
    {
        $this->longueur = $longueur;
        return $this;
    }

    public function getHauteur(): float
    {
        return $this->hauteur;
    }

    public function setHauteur(float $hauteur): self
    {
        $this->hauteur = $hauteur;
        return $this;
    }

    public function calculAire(): float
    {
        return $this->longueur * $this->hauteur;
    }

    public function calculPerimetre(): float
    {
        return 2 * ($this->hauteur + $this->longueur);
    }
}
