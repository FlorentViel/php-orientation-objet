<?php
class Personnage
{

const ONE = 1;
const FOO = "Bar";

public $nom;
public $age;

public function __construct($_nom, $_age)
{
    $this->nom = $_nom;
    $this->age = $_age;

}

public function bonjour(string $prenom)
{

  return "Bonjour  $prenom ";
}

public function Aurevoir()
{
    return "Aurevoir. ";
}

public function __afficherNom()
{
    echo 'Nom : ' . $this->nom . '<br/>';
}

public function __afficherAge()
{
    echo 'Nom : ' . $this->age . '<br/>';
}

}