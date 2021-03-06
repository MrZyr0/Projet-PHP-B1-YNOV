<?php
    session_start();

    $_SESSION["RacineServ"] = __DIR__;                                              // Variable session pour avoir des liens qui débutent par la racine du serveur dans tout les fichiers

    if (isset($_SESSION["initOK"]) == false || isset($_SESSION["user"]) == false)
    {
        header("Location: /Projet-PHP/src/php/firstLaunch.php?firstLaunch");
    }

    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';
?>

<!doctype html>
<html lang="fr" class="html">

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Menu</h3>
        </header>

        <div class="body">
            <nav class="menu">
                <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Gestion des Matchs</a>
                <a href="/Projet-PHP/src/php/ranking.php" class="btn">Classement</a>
            </nav>
        </div>

    <?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
