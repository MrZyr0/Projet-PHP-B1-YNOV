<?php
$queryOK = false;
if (isset($_GET["DB"]) && $_GET["DB"] == "initDB")
{
    include 'func/setDB.php';
}
?>


<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet de PHP">
    <meta name="author" content="Julien SEIXAS & Romaine LOIRE">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Gestion BDD</title>

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
          <h3>Gestion de la BDD</h3>
      </header>

      <main role="main" class="inner cover menu">
          <?php
          if (isset($_GET["DB"]) && $_GET["DB"] == "false")
          {
              echo "<div class=\"alert alert-danger\" role=\"alert\">";
              echo "⚠️ La base de donnée n'est pas disponible, si c'est une première installation merci de cliquer sur Créer si vous avez un quelconque problème avec la Base de donnée vous pouvez la recréer avec le bouton ci-dessous ⚠️";
              echo "</div>";
          }

          if ($queryOK === true)
            {
                echo "<div class=\"alert alert-success\" role=\"alert\">";
                echo "Base de donnée crée ! 👌";
                echo "</div>";
            }
            ?>
          <a href="?DB=initDB" class="btn btn-lg btn-secondary">Réinitialiser la Base de donnée</a>
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
