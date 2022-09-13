<?php

require_once __DIR__ . '/Customer.php';

class RegisteredCustomer extends Customer
{
    protected $username;
    protected $email;
    protected $address;
    protected $credit_card;

    public function __construct($username, $email, $address, $credit_card)
    {
        $this->setCart();
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setCustomerAddress($address);
        $this->setCredit_card($credit_card);
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getCustomerAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setCustomerAddress($address)
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

    public function placeDiscountedOrder()
    {
        $address = $this->address;
        $credit_card = $this->credit_card;
        $products = $this->cart->getProducts();
        $amount = $this->cart->getTotal() * 0.8;
        $order = new Order($address, $credit_card, $products, $amount);

    }
}