<?php
    session_start();

    $_SESSION["initOK"] = "";
    $queryOK = false;

    if (isset($_GET["init"]))
    {
        $_SESSION["BDD"] = $_POST['BDD'];
        $_SESSION["user"] = $_POST['user'];
        $_SESSION["pass"] = $_POST['pass'];

        // if (isset($_POST['signUp']))
        // {
            require_once $_SESSION["RacineServ"] . '/src/php/func/setDB.php';
        // }
        // elseif (isset($_POST['signIn']))                                               // TODO: script pour vérifier la BDD
        // {
        //     require_once $_SESSION["RacineServ"] . '/src/php/func/setDB.php';
        // }
    }

    if ($queryOK == true)
    {
        header("Location: /Projet-PHP/");
    }
?>

<!doctype html>
<html lang="fr" class="html">

    <?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Premier lancement</h3>
        </header>

        <div class="body">
            <div class="alert-warn">
                Le système à détecté que vous lancer le site pour la première fois. Merci d'entrer vos accès à la BDD.
                <!-- <br>Si vous souhaitez récupérer les données d'une session précédente, entrez les mêmes informations et sélectionnez connxeion -->
            </div>
            <nav class="menu">
                <form class="form" action="?init" method="post">
                    <span> <label>Nom de la BDD</label> <input type="text" name="BDD" value="" required> </span>
                    <span> <label>Nom d'utilisateur</label> <input type="text" name="user" value="" required> </span>
                    <span> <label>Mot de passe</label> <input type="password" name="pass" value=""> </span>
                    <!-- <span> <label>Inscription</label> <input type="radio" name="signUp" value="" checked> <label>Connexion</label> <input type="radio" name="signIn" value=""></span> -->
                    <input type="submit" value="Submit">
                </form>
            </nav>
        </div>

        <footer class="footer">
            <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </footer>

    </body>
</html>
