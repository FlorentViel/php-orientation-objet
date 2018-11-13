<?php

require_once "Personnage.php";

// Création des personnages

$batman = new Personnage('Batman' , Personnage::MEDIUM);
$superman = new Personnage('Superman', Personnage::NOVICE );

echo "<h1>".$batman->nom. " VS " .$superman->nom.   "</h1>";


echo "<h3>".$batman->nom. "</h3>";
echo "<div> Point de vie : " .$batman->vie. "</div>";
echo "<div> Point d'expérience : " .$batman->exp. "</div>";
echo "<h3>".$superman->nom. "</h3>";
echo "<div> Point de vie : " .$superman->vie. "</div>";
echo "<div> Point d'expérience :" .$superman->exp. "</div>";

echo "<hr>";

echo "<h2>Debut de combat</h2>";


echo "<div>" . $batman->saluer($superman) . "</div>";
echo "<div>". $superman->saluer($batman) . "</div>";

echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<hr>";

echo "<h3>" . $batman->nom . " attaque " . $superman->nom . "</h3>";
echo $batman->attaquer($superman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<hr>";
echo "<h3>" . $superman->nom . " riposte sur avec une attaque suivi d'une SUPER ATTAQUE" . $batman->nom . "</h3>";
echo $superman->attaquer($batman);
echo $superman->superAttaque($batman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<h3>" . $batman->nom . " lance une SUPER ATTAQUE " . $superman->nom . "</h3>";
echo $batman->superAttaque($superman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";
echo "<div>Superman pleure sa maman... et se soigne</div>";
echo $superman->soigner();
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<hr>";
echo "<h3>" . $batman->nom . " tente une ATTAQUE SECRETE " . $superman->nom . "</h3>";
//echo "<h3>" . $batman->nom . "lance une ATTAQUE SECRETE " . $superman->nom . "</h3>";
echo $batman->attaqueSecrete($superman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<hr>";
echo "<h3>" . $superman->nom . " tente une double attaque sur " . $batman->nom . "</h3>";
echo $superman->attaquer($batman);
echo $superman->attaquer($batman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

echo "<hr>";
echo "<h3>" . $batman->nom . " lance une simple attaque sur puis achève "  . $superman->nom . " d'une attaque secrète </h3>";
echo $batman->attaquer($superman);
echo $batman->attaqueSecrete($superman);
echo "<div>Score : Batman ".$batman->vie." / " . $superman->vie. " Superman</div>";

$batman->levelUp();

echo 'Batman gagne 1 point d\'exp et monta à trois points ' . $batman->exp . ' exp. ';
















