<?php
$RacineServ = __DIR__;
require_once $RacineServ . '/../src/SQL.php';

$BDD = new SQL();

if ($_GET["mode"] == 1)
{
    $BDD->queryCreateData("
                    CREATE DATABASE IF NOT EXISTS prismesport;
                    USE prismesport;

                    DROP TABLE IF EXISTS equipe;
                    CREATE TABLE equipe
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `nomEquipe` varchar(255) DEFAULT NULL,
                      `victoires` varchar(255) DEFAULT 0,
                      `defaites` varchar(255) DEFAULT 0,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO equipe (id, nomEquipe)
                    VALUES
                    	(1,'Boston Uprising'),
                    	(2,'Dallas Fuel'),
                    	(3,'Florida Mayhem'),
                    	(4,'Houston Outlaws'),
                        (5,'London Spitfire'),
                        (6,'Los Angeles Gladiator'),
                        (7,'Los Angeles Valiant'),
                        (8,'New York Excelsior'),
                        (9,'Philadelphia Fusion'),
                        (10,'San Francisco Shock'),
                        (11,'Seoul Dynasty'),
                    	(12,'Shanghai Dragons');

                    DROP TABLE IF EXISTS map;
                    CREATE TABLE map
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `mapName` varchar(255) DEFAULT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO map (id, mapName)
                    VALUES
                        (1,'Gibraltar'),
                        (2,'Dorado'),
                        (3,'Hollywood'),
                        (4,'King\'s Row'),
                        (5,'Numbani'),
                        (6,'Route 66'),
                        (7,'Hanamura'),
                        (8,'Temple d\'Anubis'),
                        (9,'Usine Volskaya '),
                        (10,'Ilios'),
                        (11,'Nepal'),
                        (12,'Tour de Lijiang');
                ");
}

if ($_GET["mode"] == 2)
{
    $BDD->queryCreateData("DROP DATABASE IF EXISTS prismesport;");
    $BDD->queryCreateData("
                    CREATE DATABASE IF NOT EXISTS prismesport;
                    USE prismesport;

                    DROP TABLE IF EXISTS equipe;
                    CREATE TABLE equipe
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `nomEquipe` varchar(255) DEFAULT NULL,
                      `victoires` varchar(255) DEFAULT 0,
                      `defaites` varchar(255) DEFAULT 0,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO equipe (id, nomEquipe)
                    VALUES
                        (1,'Boston Uprising'),
                        (2,'Dallas Fuel'),
                        (3,'Florida Mayhem'),
                        (4,'Houston Outlaws'),
                        (5,'London Spitfire'),
                        (6,'Los Angeles Gladiator'),
                        (7,'Los Angeles Valiant'),
                        (8,'New York Excelsior'),
                        (9,'Philadelphia Fusion'),
                        (10,'San Francisco Shock'),
                        (11,'Seoul Dynasty'),
                        (12,'Shanghai Dragons');

                    DROP TABLE IF EXISTS map;
                    CREATE TABLE map
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `mapName` varchar(255) DEFAULT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO map (id, mapName)
                    VALUES
                        (1,'Gibraltar'),
                        (2,'Dorado'),
                        (3,'Hollywood'),
                        (4,'King\'s Row'),
                        (5,'Numbani'),
                        (6,'Route 66'),
                        (7,'Hanamura'),
                        (8,'Temple d\'Anubis'),
                        (9,'Usine Volskaya '),
                        (10,'Ilios'),
                        (11,'Nepal'),
                        (12,'Tour de Lijiang');
                ");
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
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <h3>Gestion de la BDD</h3>
      </header>

      <main role="main" class="inner cover">
          <a href="?mode=1" class="btn btn-lg btn-secondary">Créer</a>
          <a href="?mode=2" class="btn btn-lg btn-secondary">RE Créer</a>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romaine LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
