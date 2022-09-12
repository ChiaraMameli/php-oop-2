<?php

class Product 
{
    protected $name;
    protected $description;
    protected $category;
    protected $price;
    protected $product_code;

    public function __construct($name, $description, $category, $price, $product_code)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->setProduct_code($product_code);
    }

    /* SETTERS */
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function setCategory($category)
    {
        return $this->category = $category;
    }

    public function setPrice($price)
    {
        if(!is_numeric($price) || $price <= 0) return false;
        return $this->price = $price;
    }

    public function setProduct_code($product_code)
    {
        return $this->product_code = $product_code;
    }

    /* GETTERS */

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getDescription($description)
    {
        return $this->description = $description;
    }


    public function getCategory($category)
    {
        return $this->category = $category;
    }

    public function getPrice($price)
    {
        return $this->price = $price;
    }


    public function getProduct_code($product_code)
    {
        return $this->product_code = $product_code;
    }



}

