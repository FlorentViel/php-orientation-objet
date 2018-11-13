<?php
class Personnage
{    
    /**
     * Nom du personnage
     * @var string
     */
    
    private $name;
    
    
    /**
     * Nom du age
     * @var int
     */
    
    private $age;
    
    /**
     * Couleur de la chemise
     * @var string
     */
    
    private $shirtcolor;
    
    /**
    * CONSTRUCTOR
    */
    
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->age = $age;
    }
    
    /**
     * SETTER / GETTER
     */
    
    /**
     * Donne le nom du peronnage
     * @param string $name Nom du personnage
     * @return object
     */
    
    private function setName(string $name)
    {
        $this->name = Utils::myucFirst($name) ;
        return $this;
    }
    
    /**
     * Donne le nom du peronnage
     * @param int $name Nom du personnage
     * @return object
     */
    
    private function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    
    /**
     * Donne la couleur de la chemise du peronnage
     * @param string $name Couleur de la chemise du personnage
     * @return object
     */
    
    public function setShirtcolor(string $shirtcolor)
    {
        $this->shirtcolor = $shirtcolor;
        return $this;
    }
    
    
    /**
     * Rend le nom du personnage
     * @return string Nom du personnage
     */
    
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Rend l'age
     * @return int Age du personnage
     */
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function getShirtcolor()
    {
        return $this->shirtcolor;
    }
    
    public function attack()
    {
            
    }

}



