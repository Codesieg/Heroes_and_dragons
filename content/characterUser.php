<?php
require_once("characterManager.php");

class characterUser{

    private $id;
    private $userName;
    private $password;
    private $email;
   

    public function __construct($donnees){
        $this->setUserName($donnees);
        $this->description = $description;
        $this->setClasse($donnees);
        $this->archetype = $archetype;
        
    }
    // Liste des getters
    public function getId(){
        return $this->id;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function getDescription(){
        return $this->password;
    }

    public function getClasse(){
        return $this->email;
    }

    
    // Liste des setters

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

    public function setPassword(){
        if (is_string($description)) {
            $this->$description = $description;
        }
    }    
    
    public function setClasse(){
        if(is_string($classe)){
            $this->$classe = $classe;
        }
    }

}
?>


