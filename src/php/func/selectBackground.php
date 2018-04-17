<?php
    require_once 'SQL.php';
    $BDD = new SQL();

    try
    {
    $backgroundListe = $BDD->queryGetData ("
        SELECT backgroundUrl
        FROM background;
    ");

    $backgroundURL = $backgroundListe[array_rand($backgroundListe)][0];
    }
    catch (\Exception $e)
    {
        header('Location: ./src/php/createDB.php?DB=false');
    }

?>
