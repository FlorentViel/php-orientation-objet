<?php

namespace Controllers;

use Models\ArticleModel;

class ArticleController extends PostController {
    const TYPE = "article";

    // Propriétés $articles
    // Tableau de la liste des articles 
    private $articles = [];

    private $model;

    public function __construct()
    {
        $this->model = new ArticleModel;

        //var_dump($this->model->getAll() );
    }

    /**
     * Boucle sur la liste des articles et les affiches
     */

    public function viewALL()
    {

        foreach($this->model as $article)
        {
        echo "<h3>".$article->title."</h3>";
        echo "<div>slug : ".$article->slug."</div>";
        echo "<div>".$article->content."</div>";
        echo "<hr>";
        }
    }

}