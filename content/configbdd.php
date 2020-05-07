<?php

class configbdd{

    private const HOST_NAME = "localhost:3308";
    private const DB_NAME = "heroes_dragons";
    private const USER_NAME = "root";
    private const PWD ="admin";

    private static $pdoInstance = null; // on Test si l'instance à bien été créé

    public static function getPDO() {// Fonction de connexion à la bdd
        if(is_null(self::$pdoInstance)) {
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME;
                self::$pdoInstance = new PDO($connexion,self::USER_NAME,self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(PDOExcepton $e){
                $message =" erreur de connexion à la BDD : ". $e->getMessage();
                die($message);
            }
            self::$pdoInstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$pdoInstance;
    }
}


?>