<?php

require_once __DIR__ . '../../shopping/Cart.php';
require_once __DIR__ . '../../shopping/Order.php';


class Customer
{
    public $cart;

    public function __construct()
    {
        $this->setCart();
    }

    /**
     * Get the value of cart
     */ 
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */ 
    protected function setCart()
    {
        return $this->cart = new Cart;
    }

    public function addToCart($product)
    {
        $this->cart->addProduct($product);
    }

    public function placeOrderAsGuest($address, $credit_card)
    {
        $products = $this->cart->getProducts();
        $amount = $this->cart->getTotal();
        $order = new Order($address, $credit_card, $products, $amount);
    }
}
