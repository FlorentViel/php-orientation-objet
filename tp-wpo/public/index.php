<?php

require_once(__DIR__.'/../database.php');

// include "InterfacePost.php";
// include "Post.php";

function autoload_controllers($class) {
    include_once '../private/controllers/'.$class . '.php';
}
spl_autoload_register('autoload_controllers');

// Préparation du tableau pour afficher les articles
$articles = [];




$user_1 = new User("Clark", "KENT");


$date = new DateTime();
// include "Page.php";
// include "Article.php";

$page = new Page('Titre', 'sluuuuuuuuuug', 'contennuuuuuuuue' , 'auteur', $date->format('Y-m-d H:i:s'), 'category', 'clé');
$article = new Article('ALLO', 'sluuuuuuuuuug', 'contennuuuuuuuue' , 'auteur', $date->format('Y-m-d H:i:s'), 'category', 'clé');
