<?php
    require_once 'SQL.php';     // Appel la classe SQL (lien relatif car SQL est dans le même dossier courant)
    $BDD = new SQL($_SESSION["BDD"], $_SESSION["user"], $_SESSION["pass"]);

    $backgroundListe = $BDD->queryGetData ("
        SELECT backgroundUrl
        FROM background;
    ");

    $backgroundURL = '/Projet-PHP/src/images/backgrounds/' . $backgroundListe[array_rand($backgroundListe)][0];
?>
