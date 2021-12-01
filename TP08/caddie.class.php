<?php



class Caddie {
    private float $PrixHT;
    private float $TVA;
    private array $produits;


    const Min_Produits = 0;
    const Max_Produits = 1000;


    public function __construct(float $PrixHT, float $TVA = 20, array $produits) {

        $this->PrixHT = $PrixHT;
        $this->TVA = $TVA;
        $this->produits = [];

    }
    public function getPrixHT() : float
    {
        return $this->PrixHT;
    }
    public function setPrixHT(float $PrixHT): void
    {
        $this->PrixHT = $PrixHT;
    }


    public function getTVA() : float
    {
        return $this->TVA;
    }
    public function setTVA(string $TVA): void
    {
        $this->TVA = $TVA;
    }


    public function getProduits() : array
    {
        return $this->produits;
    }
    public function setProduits(array $produits): void
    {
        $this->produits = $produits;
    }


}



