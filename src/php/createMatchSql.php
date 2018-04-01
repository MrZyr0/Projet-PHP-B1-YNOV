<?php
$RacineServ = __DIR__ . '/../..';
require_once $RacineServ . '/src/SQL.php';

$BDD = new SQL();
var_dump($_POST['equipe1']);
var_dump($_POST['equipe2']);
var_dump($_POST['map']);
var_dump($BDD);
$equipe1=$_POST['equipe1'];
$equipe2=$_POST['equipe2'];
$map=$_POST['map'];
var_dump($equipe1);
var_dump($equipe2);
var_dump($map);
$BDD->queryCreateData("
            USE prismesport;
            INSERT INTO matche (equipe1, equipe2, map);
            VALUES
                    ('$equipe1', '$equipe2', '$map');
");
//header("Location: $RacineServ.'src/php/createMatch.php");

 ?>
