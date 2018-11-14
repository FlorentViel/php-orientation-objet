<?php


interface InterfacePost { 
    //public function __construct(string $_title, string $_slug, string $_content , string $_author, $_date_creat, string $_category, string $_key);
    public function setTitle($_title);
    public function getTitle();
    public function setContent($_content);
    public function getContent();
    public function setSlug($_slug);
    public function getSlug();
    public function setAuthor($_author);
    public function getAuthor();
    public function setDate_creat($_date_creat);
    public function getDate_creat();
    public function setDate_publish($_date_publish);
    public function getDate_publish();
    public function setCategory($_category);
    public function setKey($_key);
    public function getKey();category

}