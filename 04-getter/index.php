<?php
include_once "Utils.php";
include_once "Personnage.php";
$ritas = new Personnage('ritas' , 50);
$personnage2 = new Personnage('richard', 25);

echo "<div>".$ritas->getName() . " " . $ritas->getAge() . " ans ". "</div>";
echo "<div>".$personnage2->getName() . " " . $personnage2->getAge() ." ans  ". "</div>";

$ritas->setShirtcolor("red");
echo "<div>Couleur chemise : " .$ritas->getShirtcolor() ."</div>";



