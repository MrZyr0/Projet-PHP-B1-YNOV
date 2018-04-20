<?php
    session_start();
    require_once 'func/SQL.php';

    $BDD = new SQL($_SESSION["BDD"], $_SESSION["user"], $_SESSION["pass"]);

    $equipes=$BDD->queryGetData("
        SELECT nomEquipe, victoires, nuls ,goalAverage
        FROM equipe
        ORDER BY victoires DESC, nuls DESC,goalAverage DESC;
    ");

    $backgroundListe = $BDD->queryGetData("
        SELECT backgroundUrl
        FROM background;
    ");

    $backgroundURL = $backgroundListe[array_rand($backgroundListe)][0];
?>

<?php

    // Code d'affichage des maths pour l'historique

    // foreach ($matchs as  $match)
    // {
    //     print $match['equipe1']." ".$match['scoreEquipe1']." ".$match["scoreEquipe2"]." ".$match["equipe2"];
    //     echo '<br>';
    // }
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
    <link rel="stylesheet" href="../css/master.css">
    <style>
        html, body
        {
            background: url(<?=$backgroundURL?>) no-repeat center fixed;
            background-size: cover;
        }
    </style>

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
