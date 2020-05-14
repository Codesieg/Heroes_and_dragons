<?php
require_once("configbdd.php");


    if (isset($_POST['setDescription'])) {
        $pdo = configbdd::getPDO();
        $stmt = $pdo->prepare('UPDATE sheet
            SET description = :updateDescription
            WHERE idSheet ="8"');
        $stmt->bindValue(':updateDescription', $_POST['setDescription']);
        $stmt->execute();
    }
