<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    protected $color;
    protected $materials;


    public function __construct($name, $description, $category, $price, $color, $materials)
    {
        parent::__construct($name, $description, $category, $price);
        $this->setColor($color);
        $this->setMaterials($materials);
    }


    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}