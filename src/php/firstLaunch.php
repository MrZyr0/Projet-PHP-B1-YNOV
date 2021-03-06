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
                <?php
                    if (isset($_GET['firstLaunch']))
                    {
                        echo "<div class=\"alert alert-warn\">";
                        echo "Le système à détecté que vous lancez le site pour la première fois. Merci d'entrer vos accès à la BDD.";
                        echo "</div>";
                    }
                ?>

                <?php
                    if (isset($_GET['errorDB']))
                    {
                        echo "<div class=\"alert alert-error\">";
                        echo "<p>Le système à détecté une erreur avec la base de donnée. Il se peut que ce soit la première fois que vous lanciez le site (dans ce cas c'est normal). Merci d'entrer vos accès à la BDD.</p>";
                        echo "</div>";

                        echo "<div class=\"alert alert-warn\">";
                        echo "<p>⚠️Attention vous allez réinitialiser la Base de donnée et ainsi effacer toutes vos données !! ⚠️</p>";
                        echo "</div>";
                    }
                ?>

                <!-- <br>Si vous souhaitez récupérer les données d'une session précédente, entrez les mêmes informations et sélectionnez connxeion -->
                <form class="form" action="?init" method="post">
                    <div class="form-div2">
                        <label class="form-label">Nom de la BDD</label>
                        <input class="input input-txt" type="text" name="BDD" value="" required>
                    </div>

                    <div class="form-div2">
                        <label class="form-label">Nom d'utilisateur</label>
                        <input class="input input-txt" type="text" name="user" value="" required>
                    </div>

                    <div class="form-div2">
                        <label class="form-label">Mot de passe</label>
                        <input class="input input-txt" type="password" name="pass" value="">
                    </div>

                    <!-- <div class="form-div2">
                        <label class="form-label">Inscription</label>
                        <input type="radio" name="signUp" value="" checked>
                        <label class="form-label">Connexion</label>
                        <input type="radio" name="signIn" value="">
                    </div> -->

                    <input type="submit" value="Submit" class="btn btn-submit">
                </form>
        </div>

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
