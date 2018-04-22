<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';

    $teams=$BDD->queryGetData("
        SELECT teamName, victory, draw ,goalAverage
        FROM team
        ORDER BY victory DESC, draw DESC,goalAverage DESC;
        ");

    $backgroundListe = $BDD->queryGetData("
        SELECT backgroundUrl
        FROM background;
        ");

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
<html lang="fr" class="html">

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
          <h3>Classement</h3>
      </header>

      <div class="body">

          <table class="table">
              <thead class="table-head">
                  <tr>
                      <th>Nom de l'équipe</th>
                      <th>Nombre de victoires</th>
                      <th>Nuls</th>
                      <th>GoalAverage</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    foreach ($teams as  $team) {
                print ' <tr>
                      <th class="table-case">'.$team["teamName"].'</th>
                      <td class="table-case">'.$team["victory"].'</td>
                      <td class="table-case">'.$team["draw"].'</td>
                      <td class="table-case">'.$team["goalAverage"].'</td>
                  </tr>';
              }
                   ?>

              </tbody>
          </table>


          <a href="../../index.php" class="btn btn-lg btn-secondary">Retour</a>

          <nav class="menu">
              <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Gestion des Matchs</a>
              <a href="/Projet-PHP/src/php/classement.php" class="btn">Classement</a>
          </nav>
      </div>

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

  </body>
</html>
