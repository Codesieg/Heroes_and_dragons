<?php
require_once("characterManager.php");

class characterSheet{

    private $id;
    private $username;
    private $description;
    private $classe;
    private $archetype;
    private $level;
    private $race;
    private $alignement;
    private $xp;

    public  $personnage = [];

    public function __construct($name, $description, $classe, $archetype, $alignement, $level, $race, $xp) {
        $this->name = $name;
        $this->description = $description;
        $this->classe = $classe;
        $this->archetype = $archetype;
        $this->alignement = $alignement;
        $this->level = $level;
        $this->race = $race;
        $this->xp = $xp;
    }
    // Liste des getters
    public function getId(){
        return $this->id;
    }

    public function getUserName(){
        return $this->username;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getClasse(){
        return $this->classe;
    }

    public function getArchetype(){
        return $this->archetype;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getRace(){
        return $this->race;
    }

    public function getAlignement(){
        return $this->alignement;
    }

    public function getXp(){
        return $this->xp;
    }

    // Liste des getters

    public function setId($id){
        $id = (int) $id;
        if ($id > 0){
            $this->$id = $id;
        }
    }

    public function setUserName(){
        if(is_string($username)){
            $this->$username = $username;
        }
    }

    public function setDescription(){
        if (is_string($description)) {
            $this->$description = $description;
        }
    }    
    
    public function setClasse(){
        if(is_string($classe)){
            $this->$classe = $classe;
        }
    }

    public function setArchetype(){
        if(is_string($archetype)){
            $this->$archetype = $archetype;
        }
    }

    public function setLevel(){
        $level = (int) $level;
        if($level >=1 && $level <=1 ){

        }
    }


}
?>


<!-- example : 
private $nom;
    private $poids;
    private $prix;

    public static $fruits = [];

    public function __construct($nom,$poids,$prix){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
    }

    public function getNom(){
        return $this->nom;
    } -->