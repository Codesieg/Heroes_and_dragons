<?php
require_once("configbdd.php");
require_once("characterSheet.php");

class characterManager
{
    public static function characterSheetFromDB()
    {
        $pdo = configbdd::getPDO();
        $stmt = $pdo->prepare('SELECT distinct sh.characterName AS userName, sh.description AS description, c.classeName AS classe, a.archetypeName AS archetype, sh.level AS level, 
        r.raceName AS race, align.alignementName AS alignement, sh.experience AS xp 
        FROM users s
        INNER JOIN userssheet us ON s.idUsers = us.idUsers
        INNER JOIN sheet sh ON us.idSheet = sh.idSheet
        INNER JOIN sheetvalues sv ON sh.idSheet = sv.idSheet
        INNER JOIN classe c ON sv.idClasse = c.idClasse
        INNER join archetype a ON sv.idArchetype = a.idArchetype
        INNER JOIN race r ON sv.idRace = r.idRace
        INNER JOIN alignement align ON sv.idAlignement = align.idAlignement
        where sh.characterName ="Sieg Heart"');
        $stmt->execute();
        $perso = array(); // Création d'un tableau personnages
        foreach ($stmt as $row) { // Parcours du tableau afin de récupérer chaque élément de mon objet
            $perso = new characterSheet( // création de mon objet que j'insère dans un tableau d'objet
                $row['userName'],                    //
                $row['description'],                  //
                $row['classe'],                 //
                $row['archetype'],              // récupération de chaque donnée du tableau à envoyer à mon constructeur
                $row['level'],                 //
                $row['race'],                   //
                $row['alignement'],             //
                $row['xp']              //
            );
            return $perso;
        }
    }

}
