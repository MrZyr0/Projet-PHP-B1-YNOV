<?php
require_once 'SQL.php';

$BDD = new SQL("");

$equipe1=$_POST['equipe1'];
$equipe2=$_POST['equipe2'];
$map=$_POST['map'];
$scoreEq1=$_POST['scoreEquipe1'];
$scoreEq2=$_POST['scoreEquipe2'];

if($scoreEq1>$scoreEq2)
{$BDD->queryCreateData("
            USE prismesport;
            INSERT INTO matche (equipe1, equipe2, map, scoreEquipe1, scoreEquipe2)
            VALUES
                    ('$equipe1', '$equipe2', '$map',$scoreEq1, $scoreEq2);

            UPDATE equipe
            SET victoires = victoires + 1, goalAverage = goalAverage + ($scoreEq1 - $scoreEq2)
            WHERE nomEquipe = '$equipe1';

            UPDATE equipe
            SET defaites = defaites + 1, goalAverage = goalAverage - ($scoreEq1 - $scoreEq2)
            WHERE nomEquipe = '$equipe2';
");
}
if($scoreEq2>$scoreEq1)
{$BDD->queryCreateData("
            USE prismesport;
            INSERT INTO matche (equipe1, equipe2, map, scoreEquipe1, scoreEquipe2)
            VALUES
                    ('$equipe1', '$equipe2', '$map',$scoreEq1, $scoreEq2);

            UPDATE equipe
            SET victoires = victoires + 1, goalAverage = goalAverage + ($scoreEq2 - $scoreEq1)
            WHERE nomEquipe = '$equipe2';

            UPDATE equipe
            SET defaites = defaites + 1, goalAverage = goalAverage - ($scoreEq2 - $scoreEq1)
            WHERE nomEquipe = '$equipe1';
");
}
if($scoreEq2==$scoreEq1)
{$BDD->queryCreateData("
            USE prismesport;
            INSERT INTO matche (equipe1, equipe2, map, scoreEquipe1, scoreEquipe2)
            VALUES
                    ('$equipe1', '$equipe2', '$map',$scoreEq1, $scoreEq2);

            UPDATE equipe
            SET nuls = nuls +1
            WHERE nomEquipe = '$equipe2' OR nomEquipe = '$equipe1';


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

     <title>Match crée</title>

     <!-- Bootstrap core CSS -->
     <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
   </head>

   <body class="text-center">

     <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
       <header class="masthead mb-auto">
           <h3>Match crée!</h3>
       </header>

       <main role="main" class="inner cover">
           <div class="create_message">
               Le match entre <?php  print $equipe1 ?> et <?php print $equipe2  ?> a bien été crée.
               <br>
               <br>
           </div>
           <a href="createMatch.php" class="btn btn-lg btn-secondary">Retour création match</a>
       </main>

       <footer class="mastfoot mt-auto">
         <div class="inner">
           <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
         </div>
       </footer>
     </div>

   </body>
 </html>
