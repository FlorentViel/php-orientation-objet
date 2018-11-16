<?php 

include_once "../private/CountryCapital.php";


$europa = new CountryCapital();
$europa->__constructor('../private/europa.json');
$europa->getCapitals();
echo '<hr>';
$europa->getCapitalByCountry("France");
echo '<hr>';

$europa->getCountryByCapital("Paris");

//echo $europa->__constructor($source_json);
//var_dump($europa);

