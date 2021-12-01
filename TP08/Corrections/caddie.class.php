<?php

include_once 'product.class.php';
include_once 'user.class.php';

class Caddie {

    private array $products;
    private float $tax;
    private float $delivery;
    private float $discount;
    private ?User $user;

    public function __construct(User $user = null, float $tax = 20)
    {
        $this->products = [];
        $this->tax = $tax;
        $this->delivery = 10;
        $this->discount = 0;
        $this->user = $user;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function clearCaddie():void
    {
        $this->products = [];
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function setTax($tax): void
    {
        $this->tax = $tax;
    }

    public function getDelivery(): float
    {
        if (($this->getWithTaxesPrice() >= 50) || ($this->getUser() !== null && $this->getUser()->getPostcode() !== null && substr($this->getUser()->getPostcode(),0, 2) === "33")) {
            return 0;
        } else {
            return $this->delivery;
        }
    }

    public function setDelivery($delivery): void
    {
        $this->delivery = $delivery;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function setDiscount($discount): void
    {
        $this->discount = $discount;
    }

    public function getProductCount(): int
    {
        return count($this->products);
    }

    public function getProductTotal(): float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function getWithTaxesPrice(): float
    {
        return $this->getProductTotal() + round(($this->getProductTotal() * $this->tax / 100), 2);
    }

    public function getTotalPrice(): float
    {
        return $this->getWithTaxesPrice() + $this->getDelivery() - $this->discount;
    }

}
