<?php

class Sphere {

    private float $rayon;

    public function __construct(float $r)
    {
        $this->rayon = $r;
    }

    public function getRayon(): float
    {
        return $this->rayon;
    }

    public function setRayon(float $rayon): void
    {
        $this->rayon = $rayon;
    }

    public function getDiametre(): float
    {
        return $this->rayon * 2;
    }

    public function setDiametre(float $diametre)
    {
        $this->rayon = $diametre / 2;
    }

    public function calculVolume(): float
    {
        return 4/3 * pi() * pow($this->rayon, 3);
    }

    public function calculCirconference(): float
    {
        return $this->getDiametre() * pi();
    }

}
