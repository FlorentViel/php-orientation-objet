<?php 

abstract class Vehicule 
{
    private $brand;
    private $model;
    private $color;
    private $driver;

    private $speed;
    private $maxspeed;
    private $isStarded;
    private $hasDriver;

    public function __construct(string $brand, string $model, string $color, string $driver ="")
    {
        $this->setBrand()= $brand;
        $this->setModel() = $model;
        $this->setColor() = $color;
        $this->setDriver() = $driver;
    }

}

