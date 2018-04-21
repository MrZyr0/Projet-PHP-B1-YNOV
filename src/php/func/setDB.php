<?php
require_once 'SQL.php';

$BDD = new SQL("", $_SESSION["user"], $_SESSION["pass"]);

$BDD->queryCreateData("DROP DATABASE IF EXISTS " . $_SESSION["BDD"] . ";");
$BDD->queryCreateData("
                        CREATE DATABASE IF NOT EXISTS " . $_SESSION["BDD"] . ";" . "
                        USE " . $_SESSION["BDD"] . ";" . "

                        DROP TABLE IF EXISTS team;
                        CREATE TABLE team
                        (
                          ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                          teamName varchar(255) DEFAULT NULL,
                          victory int(11) DEFAULT 0,
                          defeat int(11) DEFAULT 0,
                          draw int(11) DEFAULT 0,
                          goalAverage int(11) DEFAULT 0,
                          image varchar(255) DEFAULT NULL,
                          PRIMARY KEY (ID)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                        INSERT INTO team (teamName, image)
                        VALUES
                            ('Boston Uprising','https://image.noelshack.com/fichiers/2018/16/1/1523909912-bostonuprising.png'),
                            ('Dallas Fuel','https://image.noelshack.com/fichiers/2018/16/1/1523909934-dallasfuel.png'),
                            ('Florida Mayhem','https://image.noelshack.com/fichiers/2018/16/1/1523909943-floridamahyem.png'),
                            ('Houston Outlaws','https://image.noelshack.com/fichiers/2018/16/1/1523909954-houstonoutlaws.png'),
                            ('London Spitfire','https://image.noelshack.com/fichiers/2018/16/1/1523909980-londonspitfire.png'),
                            ('Los Angeles Gladiator','https://image.noelshack.com/fichiers/2018/16/1/1523909967-lagladiators.png'),
                            ('Los Angeles Valiant','https://image.noelshack.com/fichiers/2018/16/1/1523909992-losangelesvalliant.png'),
                            ('New York Excelsior','https://image.noelshack.com/fichiers/2018/16/1/1523910002-newyorkexelsior.png'),
                            ('Philadelphia Fusion','https://image.noelshack.com/fichiers/2018/16/1/1523910015-philadelphiafusion.png'),
                            ('San Francisco Shock','https://image.noelshack.com/fichiers/2018/16/1/1523910026-sanfranciscoshock.png'),
                            ('Seoul Dynasty','https://image.noelshack.com/fichiers/2018/16/1/1523910043-seouldynasty.png'),
                            ('Shanghai Dragons','https://image.noelshack.com/fichiers/2018/16/1/1523910054-shanghaidragons.png');

                        DROP TABLE IF EXISTS map;
                        CREATE TABLE map
                        (
                          ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                          mapName varchar(255) DEFAULT NULL,
                          PRIMARY KEY (ID)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                        INSERT INTO map (mapName)
                        VALUES
                            ('Gibraltar'),
                            ('Dorado'),
                            ('Hollywood'),
                            ('King\'s Row'),
                            ('Numbani'),
                            ('Route 66'),
                            ('Hanamura'),
                            ('Temple d\'Anubis'),
                            ('Usine Volskaya'),
                            ('Ilios'),
                            ('Nepal'),
                            ('Tour de Lijiang');

                        DROP TABLE IF EXISTS game;
                        CREATE TABLE game
                        (
                          ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                          team1 varchar(255) DEFAULT NULL,
                          team2 varchar(255) DEFAULT NULL,
                          map varchar(255) DEFAULT NULL,
                          scoreTeam1 int(11) DEFAULT 0,
                          scoreTeam2 int(11) DEFAULT 0,
                          PRIMARY KEY (ID)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                        DROP TABLE IF EXISTS background;
                        CREATE TABLE background
                        (
                            ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                            backgroundName varchar(255) DEFAULT NULL,
                            backgroundUrl varchar(255) DEFAULT NULL,
                            PRIMARY KEY (ID)
                        );

                        INSERT INTO background (backgroundName, backgroundUrl)
                        VALUES
                            ('Dorado','Dorado.jpg'),
                            ('Eichenvald','Eichenvald.jpg'),
                            ('Gibraltar','Gibraltar.jpg'),
                            ('Hanamura','Hanamura.jpg'),
                            ('Hollywood','Hollywood.jpg'),
                            ('Ilios','Ilios.jpg'),
                            ('King\'s Row','KingsRow.jpg'),
                            ('Nepal','Nepal.jpg'),
                            ('Numbani','Numbani.jpg'),
                            ('Route 66','Route66.jpg'),
                            ('Temple d\'Anubis','TempleAnubis.jpg'),
                            ('Tour de Lijiang','Tour_de_Lijiang.jpg'),
                            ('Usine Volskaya','Usine_Volskaya.jpg');
                    ");
$queryOK = true;


?>
