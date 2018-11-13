<?php

class Car
{
    /**
    * Constante 
    */

    const START = true;
    const STOP = false;


 

    public $mark;
    public $model;
    public $color;
    public $speed = 0;
    public $isStarted = false;
    public $marche;
    public $driver;
    public $hasDriver = false;
    public $maxSpeed = 0;




    public function __construct(string $_mark, string $_model, string $_color,  $_marche = self::STOP  , string $_driver)
    {
        $this->mark = $_mark;
        $this->model = $_model;
        $this->color = $_color;
        $this->marche = $_marche;
        $this->driver = $_driver;

    }

    public function start()
    {
        if (!$this->isStarted && $this->hasDriver)
        {
            $this->isStarted = true;
        }

    }

    public function stop()
    {   
        if ($this->speed == 0){
            return "La vitesse du véhicule de " . $this->driver . " est trop élever pour s'arrêter";
        }




        else if($this->isStarted)
        {   
            $this->isStarted == false;
            $this->speed == 0;
            return  "Arrêt du véhicule de " . $this->driver;

        }

        else if (!$this->isStarted)
        {   
            return  "Déjà arrêter";
        }

    }

    public function moving(int $movespeed)
    {
        $this->speed = $movespeed;
        return "Le véhicule de " . $this->driver . " ". "se déplace maintenant à " . $this->speed . "kms/h";

        if($this->speed > $this->maxSpeed)
        {
            $this->maxspeed = $this->speed;
        }
    }

    public function turning($direction)
    {
        if($this->speed > 30)
        {
        return "La vitesse du véhicule de " . $this->driver . " est trop élever pour pouvoir tourner";
        }

        elseif($direction == "droite")
        {
        return "Le véhicule de " . $this->driver . " tourne à " . $direction ;
        }

        elseif($direction == "gauche")
        {
        return "Le véhicule de " . $this->driver . " tourne à " . $direction ;
        }
    }

    public function maxSpeed()
    {
        $max = 0;
        if($speed> $max)
        {
        $max = $this->speed;
        }
        
        return $max;
    }


}