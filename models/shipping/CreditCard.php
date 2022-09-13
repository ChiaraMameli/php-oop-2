<?php

class CreditCard 
{
    private $number;
    private $circuit;
    private $expiration;

    public function __construct($number, $circuit, $expiration)
    {
        $this->setNumber($number);
        $this->setCircuit($circuit);
        $this->setExpiration($expiration);
    }

    public function isExpired()
    {
        $today = strtotime(date("d-m-Y"));
        return $this->expiration < $today;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of circuit
     */ 
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     *
     * @return  self
     */ 
    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return date("d-m-Y",$this->expiration);
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = strtotime($expiration);

        return $this;
    }
}