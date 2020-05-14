<?php
require_once("characterManager.php");

class characterSheet{

    // public $id;
    // public $userName;
    // public $description;
    // public $classe;
    // public $archetype;
    // public $level;
    // public $race;
    // public $alignement;
    // public $xp;

    private $id;
    private $userName;
    private $description;
    private $classe;
    private $archetype;
    private $level;
    private $race;
    private $alignement;
    private $xp;

    public function __construct($userName, $description, $classe, $archetype, $level, $race, $alignement, $xp){
        $this->userName = $userName;
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
        return $this->userName;
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

    // Liste des setters

    // public function setId($id){
       
    //         $this->$id = $id;
        
    // }

    // public function setUserName($userName){
        
    //         $this->$userName = $userName;
        
    // }

    // public function setDescription($description){
        
    //         $this->$description = $description;
        
    // }    
    
    // public function setClasse($classe){
        
    //         $this->$classe = $classe;
        
    // }

    // public function setArchetype($archetype){
       
    //         $this->$archetype = $archetype;
        
    // }

    // public function setLevel($level){
       
    //         $this->$level = $level;
        
    // }

    // public function setRace($race){
        
    //         $this->$race = $race;
        
    // }

    // public function setAlignement($alignement){
       
    //         $this->$alignement = $alignement;
       
    // }

    // public function setXp($xp){
    //     $this->$xp = $xp;
    // }



    public function setId($id){
        $id = (int) $id;
        if ($id > 0){
            $this->$id = $id;
        }
    }

    public function setUserName($userName){
        if(is_string($userName)){
            $this->$userName = $userName;
        }
    }

    public function setDescription($description){
        if (is_string($description)) {
            $this->$description = $description;
        }
    }    
    
    public function setClasse($classe){
        if(is_string($classe)){
            $this->$classe = $classe;
        }
    }

    public function setArchetype($archetype){
        if(is_string($archetype)){
            $this->$archetype = $archetype;
        }
    }

    public function setLevel($level){
        $level = (int) $level;
        if($level >=1 && $level <=100 ){
            $this->$level = $level;
        }
    }

    public function setRace($race){
        if (is_string($race)){
            $this->$race = $race;
        }
    }

    public function setAlignement($alignement){
        $alignement = (int) $alignement;
        if($alignement >=1 && $alignement <= 100){
            $this->$alignement = $alignement;
        }
    }

    public function setXp($xp){
        $xp = (int) $xp;
        $this->$xp = $xp;
    }


}
?>


