<?php

require_once(__DIR__.'/database.php');

include "InterfacePost.php";
include "Post.php";
include "Page.php";
include "Article.php";

$page = new Page('Titre', 'sluuuuuuuuuug', 'auteur', 'date', 'category', 'clé');


echo "<div>Marque : ".$page->getTitle()."</div>";

