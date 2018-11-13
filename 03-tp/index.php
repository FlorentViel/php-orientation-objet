<?php 

require_once "Car.php";

// Création des personnages

$car1 = new Car('Ford' , 'Ranger' , 'Noire' , false, 'Michel' );
$car2 = new Car('Toyota' , 'Hillux' , 'Blanc' ,  false, 'Jean' );
$car3 = new Car('Doge' , 'RAM 1500' , 'Rouge' , false, 'Janine' );

echo '<div>'. $car1->start() . '<div>' ;
echo '<div>'. $car3->start() . '<div>' ;
echo '<div>'. $car1->moving(50) . '<div>' ;
echo '<div>'. $car3->moving(30) . '<div>' ;
echo '<div>'. $car1->turning("droite") . '<div>' ;
echo '<div>'. $car3->turning("droite") . '<div>' ;
echo '<div>'. $car1->moving(20) . '<div>' ;
echo '<div>'. $car3->moving(70) . '<div>' ;
echo '<div>'. $car1->turning("gauche") . '<div>' ;
echo '<div>'. $car1->maxspeed() . '<div>' ;

echo '<div>'. $car1->stop() . '<div>' ;
echo '<div>'. $car3->stop() . '<div>' ;


