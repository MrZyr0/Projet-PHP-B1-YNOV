<?php
$RacineServ = __DIR__;
require_once $RacineServ . '/src/SQL.php';

$BDD = new SQL();
$BDD->queryExec("
                DROP TABLE IF EXISTS prismesport;
                CREATE DATABASE prismesport;

                CREATE TABLE equipe
                (
                  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                  `NomEquipe` varchar(255) DEFAULT NULL,
                  `Victoires` varchar(255) DEFAULT 0,
                  `Defaites` varchar(255) DEFAULT 0,
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                INSERT INTO equipe (id, NomEquipe, Victoires, )
                VALUES
                	(1,'Boston Uprising'),
                	(2,'Dallas Fuel'),
                	(3,'Florida Mayhem'),
                	(4,'Houston Outlaws'),
                    (5,'London Spitfire');
                    (6,'Los Angeles Gladiator');
                    (7,'Los Angeles Valiant');
                    (8,'New York Excelsior');
                    (9,'Philadelphia Fusion');
                    (10,'San Francisco Shock');
                    (11,'Seoul Dynasty');
                	(12,'Shanghai Dragons');
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
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <h3>Classement</h3>
      </header>

      <main role="main" class="inner cover">
          <pre style="color: white"></pre>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romaine LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
