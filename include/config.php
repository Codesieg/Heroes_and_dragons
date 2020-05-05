<?php

class configbdd {

    private const HOST_NAME = "localhost";
    private const DB_NAME = "heroes_dragons";
    private const USER = "root";
    private const PASS ="admin";

     private $pdoInstance = null; // on Test si l'instance à bien été créé

     public static function getPDO () {// Fonction de connexion à la bdd
        if(is_null(self::$pdoInstance)) {
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.'dbname='.self::DB_NAME;
                self::$pdoInstance = new PDO($connexion, self::USER, self::PASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(PDOExcepton $e){
                $message =" erruer de connexion à la BDD : ". $e->getMessage();
                die($message);
            }
            self::$pdoInstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$pdoInstance;
     }
}


?>