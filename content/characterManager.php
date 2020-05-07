<?php
require_once("configbdd.php");
require_once("characterSheet.php");
class characterManager{
        public static function characterSheetFromDB(){
        $pdo = configbdd::getPDO();
        $stmt = $pdo->prepare('SELECT distinct sh.characterName AS Nom, sh.description AS Story, c.classeName AS Classe, a.archetypeName AS Archetype, sh.level AS Niveau, 
        r.raceName AS Race, align.alignementName AS Alignement, sh.experience AS Experience FROM users s
        INNER JOIN userssheet us ON s.idUsers = us.idUsers
        INNER JOIN sheet sh ON us.idSheet = sh.idSheet
        INNER JOIN sheetvalues sv ON sh.idSheet = sv.idSheet
        INNER JOIN classe c ON sv.idClasse = c.idClasse
        INNER join archetype a ON sv.idArchetype = a.idArchetype
        INNER JOIN race r ON sv.idRace = r.idRace
        INNER JOIN alignement align ON sv.idAlignement = align.idAlignement
        where sh.characterName = "Sieg Heart" ');
        $stmt->execute();
        while ($donnees = $stmt->fetchALL()){

        }
        $perso = new characterSheet($donnees);

        }
        

    public static function characterSheetFromDBDebug() {
        $pdo = configbdd::getPDO();
        $stmt = $pdo->prepare('SELECT distinct sh.characterName AS Nom, sh.description AS Description, c.classeName AS classe, a.archetypeName AS Archetype, sh.level AS Niveau, 
        r.raceName AS Race, align.alignementName AS Alignement, sh.experience AS experience FROM users s
        INNER JOIN userssheet us ON s.idUsers = us.idUsers
        INNER JOIN sheet sh ON us.idSheet = sh.idSheet
        INNER JOIN sheetvalues sv ON sh.idSheet = sv.idSheet
        INNER JOIN classe c ON sv.idClasse = c.idClasse
        INNER join archetype a ON sv.idArchetype = a.idArchetype
        INNER JOIN race r ON sv.idRace = r.idRace
        INNER JOIN alignement align ON sv.idAlignement = align.idAlignement
        where sh.characterName = "Sieg Heart" ');
        $stmt->execute();
        $personnage = $stmt->fetchALL();
        echo '<pre class="text-white">';
        print_r($personnage);
    }
}
