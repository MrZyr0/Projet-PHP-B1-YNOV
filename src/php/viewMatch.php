<?php

require_once 'SQL.php';

$BDD = new SQL("");
$matchs = $BDD->queryGetData("
    SELECT equipe1, equipe2, scoreEquipe1, scoreEquipe2
    FROM matche
");
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet de PHP">
    <meta name="author" content="Julien SEIXAS & Romaine LOIRE">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Classement Overwatch</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">

    <!-- CSS Perso -->
    <link rel="stylesheet" href="src/css/master.css">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <h3>Historique des matchs</h3>
      </header>

      <main role="main" class="inner cover">
          <p>
              <?php

            foreach ($matchs as  $match) {
              print $match['equipe1']." ".$match['scoreEquipe1']." ".$match["scoreEquipe2"]." ".$match["equipe2"];
              echo '<br>';
          }
           ?>
       </p>
          <a href="gestionMatch.php" class="btn btn-lg btn-secondary">Retour</a>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
