<?php
$dbh;
try {
    $dbh = new PDO('mysql:host=localhost;dbname=crm_d_connect', "root", "admin");
  
    //$dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>