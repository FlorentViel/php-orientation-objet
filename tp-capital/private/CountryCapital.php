<?php 

Class CountryCapital 
{
    //Aucune propriété

    /**
     * Le constructor prend le chemin relatif du fichier json et return $parsed_json
     */
    
    public function __constructor($source_json)
    {
        $this->source_json = $source_json;
       
        // Si le fichier existe le programe s'exécute , sinon , fin du programme avec exit();
 
        if (file_exists($source_json)) {
            $json_data = file_get_contents($source_json);
            $parsed_json = json_decode($json_data, true);
        } else {
            exit("<h1>ERREUR</h1> Le fichier \"<strong>$source_json</strong>\" n'existe pas.");
        }

        return $parsed_json;
    
    }

    /**
    * Genère l'ensemble des pays avec leurs nos de capitals associés
    */
   
    public function getCapitals()
    {
        
    $source_json = $this->source_json;
    //var_dump($source_json);

    $parsed_json = $this->__constructor($source_json);

    echo '<ul>';


    foreach($parsed_json as $json)
    {

    $this->country = $json['country'];
    $this->capital = $json['capital'];

    echo "<li> $this->capital est la capital de $this->country </li>";
    }

    echo '</ul>';


    }   

    /**
    * Genère la capital du pays selectionné
    */
   

    public function getCapitalByCountry( string $country)
    {
        $source_json = $this->source_json;    
        $parsed_json = $this->__constructor($source_json);
    
        foreach($parsed_json as $json)
        {

        $this->country = $json['country'];
        $this->capital = $json['capital'];

            switch($country)
            {
            case $this->country : 
            echo "<ul><li> Quel est la capital du pays $this->country ? </li>";

            echo '<ul>';
            echo "<li> $this->capital </li>";
            }

            echo '</ul> </ul>';
        
        }

    }

    /**
    * Genère le capital du pays selection
    */


    public function getCountryByCapital(string $capital)
    {
        $source_json = $this->source_json;    
        $parsed_json = $this->__constructor($source_json);
    
        foreach($parsed_json as $json)
        {

        $this->country = $json['country'];
        $this->capital = $json['capital'];



            switch($this->capital)
            {
            case $capital : 
            echo "<ul><li> Quel pays a pour capital $this->capital ? </li>";
            echo '<ul>';
            echo "<li> $this->country </li>";
            }

        echo '</ul> </ul>';
        
        }
    }
}