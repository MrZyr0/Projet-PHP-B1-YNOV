<?php
    session_start();
    $_SESSION["RacineServ"] = __DIR__;                                              // Variable session pour avoir des liens qui débutent par la racine du serveur dans tout les fichiers
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';
?>

<!doctype html>
<html lang="fr" class="html">

<?php include $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Menu</h3>
        </header>

        <div class="body">
            <nav class="menu">
                <a href="src/php/createDB.php?mode=0" class="btn">Gestion de la BDD</a>
                <a href="src/php/gestionMatch.php" class="btn">Gestion des Matchs</a>
                <a href="src/php/classement.php" class="btn">Classement</a>
            </nav>
        </div>

        <footer class="footer">
                <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </footer>

    </body>
</html>
