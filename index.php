<?php
    $RacineServ = __DIR__;
    require_once $RacineServ . '/src/php/SQL.php';
    $SQL = new SQL("");
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
          <h3>Menu</h3>
      </header>

      <main role="main" class="inner cover menu">
          <a href="src/php/createDB.php?mode=0" class="btn btn-lg btn-secondary">Gestion de la BDD</a>
          <a href="src/php/gestionMatch.php" class="btn btn-lg btn-secondary btn-accueil">Gestion des Matches</a>
          <a href="src/php/classement.php" class="btn btn-lg btn-secondary btn-accueil">Classement</a>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
