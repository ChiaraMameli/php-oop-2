<?php

class Cart
{
    protected $products = [];

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($products as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    public function addProduct($product)
    {
        if(!($product instanceof Product)) throw new Exception ("$product must be an istance of Product");
        $this->$products[] = $product;

    } 
}