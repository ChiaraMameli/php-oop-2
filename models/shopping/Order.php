<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/../shipping/Address.php';
require_once __DIR__ . '/../products/Product.php';

class Order
{
    protected $address;
    protected $credit_card;
    protected $products;
    protected $amount;

    public function __construct($address, $credit_card, $products, $amount)
    {
        $this->setAddress($address);
        $this->setCredit_card($credit_card);
        $this->setProducts($products);
        $this->setAmount($amount);
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        if(!$address instanceof Address) throw new Exception("$address must be istance of Address");
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of credit_card
     */ 
    public function getCredit_card()
    {
        return $this->credit_card;
    }

    /**
     * Set the value of credit_card
     *
     * @return  self
     */ 
    public function setCredit_card($credit_card)
    {
        if(!$credit_card instanceof CreditCard) throw new Exception("$credit_card must be istance of CreditCard");

        $this->credit_card = $credit_card;

        return $this;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        if(count($products && count(array_filter($products, function($product){
            if(!($product instanceof Product)) throw new Exception("$product must be istance of Product");
        })))) 
        $this->products = $products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */ 
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        if(!is_numeric($amount) || $amount <= 0) throw new Exception("$amount must be positive float");
        $this->amount = $amount;

        return $this;
    }
}