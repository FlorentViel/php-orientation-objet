<?php

include_once "Personnage.php";
$personnage = new Personnage('Françis' , 50);
$personnage2 = new Personnage('Richard', 25);

// echo "<div>Nom : ". $personnage->nom ."</div>";
// echo "<div>Age : ". $personnage->age ."</div>";
// echo "<div>" . $personnage->bonjour("Claire") .  "</div>"; 
// echo "<div>" . $personnage->bonjour("Doug") .  "</div>";  
// echo "<div>" .  $personnage->Aurevoir() . "</div>" ;  
// //$personnage::ONE;
// echo "<div>" . Personnage::ONE . "</div>";
// echo "<div>" . Personnage::FOO . "</div>";

$personnage->__afficherNom();
$personnage->__afficherAge();
$personnage2->__afficherNom();
$personnage2->__afficherAge();




