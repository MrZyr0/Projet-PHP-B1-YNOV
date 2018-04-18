<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';

    require_once $_SESSION["RacineServ"] . '/src/php/func/SQL.php';

    $BDD = new SQL("prismesport");
    $matchs = $BDD->queryGetData("
        SELECT equipe1, equipe2, scoreEquipe1, scoreEquipe2
        FROM matche
    ");
?>

<!doctype html>
<html lang="fr" class="html">

<?php include $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Historique des matchs</h3>
        </header>

        <div class="body">
            <p>
                <?php
                    foreach ($matchs as  $match)
                    {
                        print $match['equipe1']." ".$match['scoreEquipe1']." ".$match["scoreEquipe2"]." ".$match["equipe2"];
                        echo '<br>';
                    }
                ?>
            </p>
            <nav class="menu">
                <a href="gestionMatch.php" class="btn">Retour</a>
                <a href="gestionMatch.php" class="btn">Retour</a>
            </nav>
        </div>

      <footer class="footer">
              <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
      </footer>

  </body>
</html>
