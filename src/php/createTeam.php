<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';

    $queryOK = false;
    if (isset($_GET['createTeam']))
    {
        $teamName = $_POST['teamName'];
        $BDD->queryCreateData("
            INSERT INTO team (teamName, victory, defeat, draw, goalAverage, image)
            VALUES
                    ('$teamName', '0', '0','0', '0',' ');
");
        $queryOK = true;
    }
?>

<!doctype html>
<html lang="fr" class="html">

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Création d'équipe</h3>
        </header>

        <div class="body">
            <?php
                if ($queryOK == true)
                {
                    echo "<div class=\"alert alert-success\">";
                    echo "<p>L'equipe  <strong> $teamName </strong>  a bien été crée.</p>";
                    echo "</div>";
                }
            ?>
            <form class="form" action="?createTeam" method="POST">

                    <label>Nom equipe</label>
                     <input type="text" name="teamName" />
                <button type="submit" class="btn btn-primary my-1">Submit</button>
            </form>

            <nav class="menu">
            <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Gestion des Matchs</a>
            <a href="/Projet-PHP/src/php/classement.php" class="btn">Classement</a>
            </nav>


<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
