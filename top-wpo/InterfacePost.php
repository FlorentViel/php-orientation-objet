<?php


interface InterfacePost { 
    public function __construct($_title, $_slug, $_author, $_date_creat, $_category, $_key);
    public function setTitle($_title);
    public function getTitle();
    public function setSlug($_slug);
    public function getSlug();
    public function setAuthor($_author);
    public function getAuthor();
    public function setDate_creat($_date_creat);
    public function getDate_creat();
    public function setCategory($_category);
    public function setKey($_key);
    public function getKey();

}