<?php

include "Vehicule.php";
include "Voiture.php";
include "Moto.php";

$chevrolet = new Voiture("Chevrolet", "Camaro" , "Jaune" , "Sam Witwiki");
echo '<div>' . $chevrolet . '</div>';