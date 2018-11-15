<?php

namespace Models; 

abstract class Model {
    // Stock l'instance de PDO
    private $db;

    public function __construct()
    {
        //$this->getTable();

        try {
    
        $this->db = new \PDO('mysql:host=localhost;dbname=wpo;charset=utf8', 'root', '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, // Active les erreurs SQL
            // On récupérer tous les résultats en tableau associatifs
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]);
        
        } catch(Exception $e){
            echo $e->getMessage();
            // Redirection en PHP vers Google avec le message d'erreur concerné
            header('Localisation: https://www.google.fr/search?q='.$e->getMessage());
            echo '<img src="https://st3.depositphotos.com/5572142/13058/v/1600/depositphotos_130581556-stock-illustration-vectors-abstract-background-505-connection.jpg">';
            die('Stop'); // Arrête le script si la base de donnés n'est pas dipo
        }
        // On créer une nouvelle connexion à la BDD
    }

    private function getTable()
    {
        // Récupére le namespace de la classe
        $table = get_called_class();

        // Explose la chaine sur les backslaches du namspace
        // - Models
        // - ArticleModel
        $table = explode("\\", $table);
        //$table = $table[count($table)-1];

        // Récupère la dernière entrée du table (ArticleModel)
        $table = end($table);

        // Remplacer "Model" par rien.. (Article)
        $table = str_replace("Model" , null , $table);

        // Formate la chiane "Article" en "article"
        $table = strtolower($table);



        return $table;

    }
    
    // List / Retrieve All

    public function getAll()
    {
        $query = $this->db->query('SELECT * FROM '.$this->getTable());
        return $query->fetchall();

    }

    // C - Create - Insert

    public function create()
    {
        
    }

    // R - Read - Retrieve 

    public function getOne()
    {
        
    }

    // U - Update

    public function update()
    {
        
    }

    // D - Delete

    public function delete()
    {
        
    }
}