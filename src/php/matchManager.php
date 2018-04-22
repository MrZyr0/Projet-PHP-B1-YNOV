<?php
    session_start();

    if (isset($_SESSION["initOK"]) == false || isset($_SESSION["user"]) == false || isset($_SESSION["RacineServ"]) == false)
    {
        header("Location: /Projet-PHP/index.php");
    }

    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';
?>

<!doctype html>
<html lang="fr" class="html">

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Gestion des matchs</h3>
        </header>

        <div class="body">
            <nav class="menu">
                <a href="/Projet-PHP/src/php/createTeam.php" class="btn">Créer une équipe</a>
                <a href="/Projet-PHP/src/php/createMatch.php" class="btn">Créer un match</a>
                <a href="/Projet-PHP/index.php" class="btn">Retour</a>
            </nav>
        </div>

    <?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
