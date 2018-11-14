<?php

require_once(__DIR__.'/database.php');

include "InterfacePost.php";
include "Post.php";

function __autoload($classname) {
    include_once '../private/controllers/'.$classname . '.php';
}
spl_autoload_register('autoload_controllers');

// Préparation du tableau pour afficher les articles
$articles = [];




$date = new DateTime();
// include "Page.php";
// include "Article.php";

$page = new Page('Titre', 'sluuuuuuuuuug', 'contennuuuuuuuue' , 'auteur', $date->format('Y-m-d H:i:s'), 'category', 'clé');
$article = new Article('ALLO', 'sluuuuuuuuuug', 'contennuuuuuuuue' , 'auteur', $date->format('Y-m-d H:i:s'), 'category', 'clé');


echo "<div>Page : ".$page->getTitle(). " " .$page->getSlug(). " " .$page->getContent(). "  " .$page->getAuthor()."  " .$page->getDate_creat()."  " .$page->getCategory()."  " .$page->getKey()."</div>";

echo "<div>Article : ".$article->getTitle(). " " .$article->getSlug(). " " .$article->getContent(). "  " .$article->getAuthor()."  " .$article->getDate_creat()."  " .$article->getCategory()."  " .$article->getKey()."</div>";
