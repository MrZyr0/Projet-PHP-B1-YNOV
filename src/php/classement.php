<?php
require_once 'SQL.php';

$BDD = new SQL();

$equipes=$BDD->queryGetData("
    SELECT nomEquipe, victoires, nuls ,goalAverage
    FROM equipe
    ORDER BY victoires DESC, nuls DESC,goalAverage DESC;
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
          <h3>Classement</h3>
      </header>

      <main role="main" class="inner cover">
          <div class="classement">


          <div class="nomEquipe">
              Nom equipe :
              <br>
              <?php
                foreach ($equipes as  $equipe) {
                  print $equipe['nomEquipe']." ".$equipe['victoires']." ".$equipe['nuls']." ".$equipe['goalAverage'];
                  echo '<br>';
              }
               ?>
          </div>
          <!-- <div class="victoires">

              <br>
              <?php

                foreach ($equipes as  $equipe) {
                  print $equipe['victoires'];
                  echo '<br>';
              }
               ?>
          </div>
          <div class="nuls">
              Nuls :
              <br>
              <?php

                foreach ($equipes as  $equipe) {
                  print $equipe['nuls'];
                  echo '<br>';
              }
               ?>
          </div>
          <div class="goalAverage">
              goalAverage
              <br>
              <?php

                foreach ($equipes as  $equipe) {
                  print $equipe['goalAverage'];
                  echo '<br>';
              }
               ?>
          </div>
-->
          </div>
          <a href="../../index.php" class="btn btn-lg btn-secondary">Retour</a>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
