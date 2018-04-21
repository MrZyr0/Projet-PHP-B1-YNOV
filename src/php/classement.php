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
                      <th>draw</th>
                      <th>goalAverage</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th class="table-case">Exemple Equipe</th>
                      <td class="table-case">1</td>
                      <td class="table-case">3</td>
                      <td class="table-case">2</td>
                  </tr>
                  <tr>
                      <th class="table-case">Exemple Equipe</th>
                      <td class="table-case">1</td>
                      <td class="table-case">3</td>
                      <td class="table-case">2</td>
                  </tr>
              </tbody>
          </table>

          <div class="nomEquipe">
              Nom equipe :
              <br>
              <?php
                foreach ($teams as  $team) {
                  print $team['teamName']." ".$team['victory']." ".$team['draw']." ".$team['goalAverage'];
                  echo '<br>';
              }
               ?>
          </div>
          <a href="../../index.php" class="btn btn-lg btn-secondary">Retour</a>

          <nav class="menu">
              <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Gestion des Matchs</a>
              <a href="/Projet-PHP/src/php/classement.php" class="btn">Classement</a>
          </nav>
      </div>

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

  </body>
</html>
