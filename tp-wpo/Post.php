<?php

abstract class Post implements InterfacePost
{
    /**
    * Titre du poste
    * @var string
    */

    private $title;

    /**
    * Slug
    * @var string
    */


    private $slug;

    
    /**
    * Contenue du poste
    * @var string
    */

    private $content;


    /**
    * Nom de l'auteur
    * @var string
    */

    private $author;

    /**
    * Date de création
    * @var DATETIME()
    */

    private $date_creat;

    
    /**
    * Date de création
    * @var DATETIME()
    */

    private $date_publish = null;

    /**
    * Categorie du poste
    * @var array
    */

    private $category;


    /**
    * Mot clé du poste
    * @var array
    */

    private $key;

    /**
    * Statut du poste, actif ou non
    * @var boolean
    */

    private $state = false;

    /**
    * CONSTRUCTOR
    */

    public function __construct(string $_title, string $_slug, string $_content, string $_author, $_date_creat, string $_category, string $_key) 
    {
        $this->title = $_title;
        $this->slug = $_slug;
        $this->content = $_content;
        $this->author = $_author;
        $this->date_creat = $_date_creat;
        $this->category = $_category;
        $this->key = $_key;

    }

    /**
    * SETTER / GETTER
    */

    /**
    * SETTER TITLE
    */

    public function setTitle($_title)
    {
        $this->title = $this->formatTitle($_title);
        return $this;
    }

    /**
    * GETTER TITLE
    */

    public function getTitle()
    {
        return $this->title;
    }

    /**
    * SETTER SLUG
    */

    public function setSlug($_slug)
    {
        $this->slug = $this->formatSlug($_slug);
        return $this;
    }

    /**
    * GETTER SLUG
    */

    public function getSlug()
    {
        return $this->slug;
    }

      /**
    * SETTER CONTENT
    */

    public function setContent($_content)
    {
        $this->content = $this->formatContent($_content);
        return $this;
    }

    /**
    * GETTER SLUG
    */

    public function getContent()
    {
        return $this->content;
    }



    /**
    * SETTER AUTHOR
    */

    public function setAuthor($_author)
    {
        $this->author = $this->formatSlug($_author);
        return $this;
    }

    /**
    * GETTER AUTHOR
    */

    public function getAuthor()
    {
        return $this->author;
    }


    /**
    * SETTER DATE_CREAT
    */

    public function setDate_creat($_date_creat)
    {
        $this->date_create = $this->formatDate_creat($_date_creat);
        return $this;
    }

    /**
    * GETTER DATE_CREAT
    */

    public function getDate_creat()
    {
        return $this->date_creat;
    }


    /**
    * SETTER CATEGORY
    */

    public function setCategory($_category)
    {
        $this->category = $this->formatCategory($_category);
        return $this;
    }

    /**
    * GETTER CATEGORY
    */

    public function getCategory()
    {
        return $this->category;
    }


        /**
    * SETTER TITLE
    */

    public function setKey($_key)
    {
        $this->key = $this->formatKey($_key);
        return $this;
    }

        /**
    * GETTER TITLE
    */

    public function getKey()
    {
        return $this->key;
    }



}