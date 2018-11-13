<?php
class Personnage
{

    /**
    * Niveau Novice
    */
    const NOVICE = 1;

    /**
    * Niveau Medium
    */
    const MEDIUM = 2;

    /**
    * Niveau Expert
    */
    const EXPERT = 3;

    /**
    * @param string
    */

    public $nom;

    /**
     * @param int
     */


    public $vie = 100;
    public $exp;

    /**
     * Constructeur
     */

    public function __construct(string $_nom, int $_exp = self::NOVICE)
    {
        $this->nom = $_nom;
        $this->exp = $_exp;

    }


    public function saluer($persoASaluer)
    {
      return $this->nom. " salut ".$persoASaluer->nom;
    }

    public function attaquer($persoAAttaquer, $multiplicateur = 1)
    {
        switch ($this->exp)
        {
            case self::NOVICE:
            $persoAAttaquer->vie -= (10*$multiplicateur);
            break;
            case self::MEDIUM:
            $persoAAttaquer->vie -= (20*$multiplicateur) ;
            break;
            case self::EXPERT:
            $persoAAttaquer->vie -= (30*$multiplicateur) ;
            break;
        }

    }

    public function superAttaque($persoAAttaquer)
    {
        $this->attaquer($persoAAttaquer, 2);
    }

    public function attaqueSecrete($persoAAttaquer)
    {   
    
        if ($persoAAttaquer->vie < 50)
        {
            $persoAAttaquer->vie = 0;
        }
    
      //$this->attaquer($persoAAttaque, 3);
    }

    public function soigner()
    {
        $this->vie +=10;
    }

    public function levelUp()
    {
       
        switch ($this->exp)
        {
            case self::NOVICE:
            $this->exp = self ::MEDIUM;
            break;
        
            case self::MEDIUM:
            $this->exp = self ::EXPERT;
            break;
        

            default:

            $this->exp = self::NOVICE;


        }



    }

}