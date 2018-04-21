<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';
    $teams=$BDD->queryGetData("
    SELECT nomEquipe
    FROM equipe
    ");
    $maps=$BDD->queryGetData("
    SELECT mapName
    FROM map
    ");
    $queryOK = false;
    if (isset($_GET['createMatch']))
    {
        $sameTeam=false;
        $equipe1 = $_POST['equipe1'];
        $equipe2 = $_POST['equipe2'];
        $map = $_POST['map'];
        $scoreEq1 = $_POST['scoreEquipe1'];
        $scoreEq2 = $_POST['scoreEquipe2'];
        if($equipe1===$equipe2)
        {
            $sameTeam=true;
        }
        if($scoreEq1>$scoreEq2 && $sameTeam==false)
        {
            $BDD->queryCreateData("
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
        if($scoreEq2>$scoreEq1 && $sameTeam==false)
        {
            $BDD->queryCreateData("
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
        if($scoreEq2==$scoreEq1 && $sameTeam==false)
        {
            $BDD->queryCreateData("
                INSERT INTO matche (equipe1, equipe2, map, scoreEquipe1, scoreEquipe2)
                VALUES
                ('$equipe1', '$equipe2', '$map',$scoreEq1, $scoreEq2);

                UPDATE equipe
                SET nuls = nuls +1
                WHERE nomEquipe = '$equipe2' OR nomEquipe = '$equipe1';
                ");
        }

        $queryOK = true;
    }
?>

<!doctype html>
<html lang="fr" class="html">

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Création de Matchs</h3>
        </header>

        <div class="body">

            <?php
                if ($queryOK == true && $sameTeam==false)
                {
                    echo "<div class=\"alert alert-success\">";
                    echo "<p>Le match entre <strong> $equipe1 </strong> et <strong> $equipe2 </strong> a bien été crée.</p>";
                    echo "</div>";
                }
                if ($queryOK == true && $sameTeam==true)
                {
                    echo "<div class=\"alert alert-success\">";
                    echo "<p>Impossible de créer un match entre la meme equipe.</p>";
                    echo "</div>";
                }
            ?>
            <form class="form" action="?createMatch" method="POST">
                <div class="form-blocks">
                    <label class="form-label">Equipe 1</label>
                    <select class="input" name="equipe1">

                        <?php
                        foreach ($teams as $team) {
                            print '<option value="'.$team['nomEquipe'].'">'.$team['nomEquipe'].'</option>';
                        }
                         ?>
                    </select>

                    <label class="form-label">Equipe 2</label>
                    <select class="input" name="equipe2">
                        <?php
                        foreach ($teams as $team) {
                            print '<option value="'.$team['nomEquipe'].'">'.$team['nomEquipe'].'</option>';
                        }
                         ?>
                    </select>

                </div>

                <div class="form-blocks">
                    <label class="form-label">Score Equipe 1</label>
                    <select class="input" name="scoreEquipe1">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <label class="form-label">Score Equipe 2</label>
                    <select class="input" name="scoreEquipe2">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-blocks">
                    <label class="form-label">Map</label>
                    <select class="input" name="map">

                    <?php
                            foreach ($maps as $map) {
                            print '<option value="'.$map['mapName'].'">'.$map['mapName'].'</option>';
                            }
                     ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary my-1">Submit</button>
            </form>

            <nav class="menu">
                <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Retour</a>
                <a href="/Projet-PHP/index.php" class="btn">Accueil</a>
            </nav>
        </div>

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
