<?php
    session_start();

    if (isset($_SESSION["initOK"]) == false || isset($_SESSION["user"]) == false || isset($_SESSION["RacineServ"]) == false)
    {
        header("Location: /Projet-PHP/index.php");
    }

    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';

    $teams = $BDD->queryGetData("
        SELECT teamName
        FROM team
        ");

    $maps = $BDD->queryGetData("
        SELECT mapName
        FROM map
        ");


    $queryOK = false;
    if (isset($_GET['createMatch']))
    {
        $sameTeam=false;
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];
        $map = $_POST['map'];
        $scoreTeam1 = $_POST['scoreTeam1'];
        $scoreTeam2 = $_POST['scoreTeam2'];
        if($team1===$team2)
        {
            $sameTeam=true;
        }
        if($scoreTeam1>$scoreTeam2 && $sameTeam==false)
        {
            $BDD->queryCreateData("
                INSERT INTO game (team1, team2, map, scoreTeam1, scoreTeam2)
                VALUES
                ('$team1', '$team2', '$map',$scoreTeam1, $scoreTeam2);

                UPDATE team
                SET victory = victory + 1, goalAverage = goalAverage + ($scoreTeam1 - $scoreTeam2)
                WHERE teamName = '$team1';

                UPDATE team
                SET defeat = defeat + 1, goalAverage = goalAverage - ($scoreTeam1 - $scoreTeam2)
                WHERE teamName = '$team2';
                ");
        }
        if($scoreTeam2>$scoreTeam1 && $sameTeam==false)
        {
            $BDD->queryCreateData("
                INSERT INTO game (team1, team2, map, scoreTeam1, scoreTeam2)
                VALUES
                ('$team1', '$team2', '$map',$scoreTeam1, $scoreTeam2);

                UPDATE team
                SET victory = victory + 1, goalAverage = goalAverage + ($scoreTeam2 - $scoreTeam1)
                WHERE teamName = '$team2';

                UPDATE team
                SET defeat = defeat + 1, goalAverage = goalAverage - ($scoreTeam2 - $scoreTeam1)
                WHERE teamName = '$team1';
                ");
        }
        if($scoreTeam2==$scoreTeam1 && $sameTeam==false)
        {
            $BDD->queryCreateData("
                INSERT INTO game (team1, team2, map, scoreTeam1, scoreTeam2)
                VALUES
                ('$team1', '$team2', '$map',$scoreTeam1, $scoreTeam2);

                UPDATE team
                SET nuls = nuls +1
                WHERE teamName = '$team2' OR teamName = '$team1';
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
                    echo "<p>Le match entre <strong> $team1 </strong> et <strong> $team2 </strong> a bien été crée.</p>";
                    echo "</div>";
                }
                if ($queryOK == true && $sameTeam==true)
                {
                    echo "<div class=\"alert alert-warn\">";
                    echo "<p>Impossible de créer un match entre la meme equipe.</p>";
                    echo "</div>";
                }
            ?>

            <div class="table-container">
                <form class="form" action="?createMatch" method="POST">
                    <div class="form-div1">

                        <div class="form-div2">
                            <label class="form-label">Equipe 1</label>
                            <select class="input" name="team1">
                                <?php
                                foreach ($teams as $team)
                                {
                                    print '<option value="'.$team['teamName'].'">'.$team['teamName'].'</option>';
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-div2">
                            <label class="form-label">Equipe 2</label>
                            <select class="input" name="team2">
                                <?php
                                foreach ($teams as $team)
                                {
                                    print '<option value="'.$team['teamName'].'">'.$team['teamName'].'</option>';
                                }
                                ?>
                            </select>
                        </div>

                    </div>

                    <div class="separator"></div>

                    <div class="form-div1">
                        <div class="form-div2">
                            <label class="form-label">Score Equipe 1</label>
                            <select class="input" name="scoreTeam1">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-div2">
                            <label class="form-label">Score Equipe 2</label>
                            <select class="input" name="scoreTeam2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>

                    <div class="separator"></div>

                    <div class="form-div1">
                        <div class="form-div2">
                            <label class="form-label">Map</label>
                            <select class="input" name="map">
                                <?php
                                    foreach ($maps as $map)
                                    {
                                        print '<option value="'.$map['mapName'].'">'.$map['mapName'].'</option>';
                                    }
                                 ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>

            <nav class="menu">
                <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Retour</a>
                <a href="/Projet-PHP/index.php" class="btn">Accueil</a>
            </nav>
        </div>

<?php require_once $_SESSION["RacineServ"] . '/src/php/templates/footer.php'; ?>

    </body>
</html>
