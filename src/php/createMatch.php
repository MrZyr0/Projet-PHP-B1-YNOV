<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';

    $queryOK = false;
    if (isset($_GET['createMatch']))
    {
        $equipe1 = $_POST['equipe1'];
        $equipe2 = $_POST['equipe2'];
        $map = $_POST['map'];
        $scoreEq1 = $_POST['scoreEquipe1'];
        $scoreEq2 = $_POST['scoreEquipe2'];

        if($scoreEq1>$scoreEq2)
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
        if($scoreEq2>$scoreEq1)
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
        if($scoreEq2==$scoreEq1)
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
                if ($queryOK == true)
                {
                    echo "<div class=\"alert alert-success\">";
                    echo "<p>Le match entre <strong> $equipe1 </strong> et <strong> $equipe2 </strong> a bien été crée.</p>";
                    echo "</div>";
                }
            ?>
            <form class="form" action="?createMatch" method="POST">
                <div class="form-blocks">
                    <label class="form-label">Equipe 1</label>
                    <select class="input" name="equipe1">
                        <option value="Boston Uprising">Boston Uprising</option>
                        <option value="Dallas Fuel">Dallas Fuel</option>
                        <option value="Florida Mayhem">Florida Mayhem</option>
                        <option value="Houston Outlaws">Houston Outlaws</option>
                        <option value="London Spitfire">London Spitfire</option>
                        <option value="Los Angeles Gladiator">Los Angeles Gladiator</option>
                        <option value="Los Angeles Valiant">Los Angeles Valiant</option>
                        <option value="New York Excelsior">New York Excelsior</option>
                        <option value="Philadelphia Fusion">Philadelphia Fusion</option>
                        <option value="San Francisco Shock">San Francisco Shock</option>
                        <option value="Seoul Dynasty">Seoul Dynasty</option>
                        <option value="Shanghai Dragons">Shanghai Dragons</option>
                    </select>

                    <label class="form-label">Equipe 2</label>
                    <select class="input" name="equipe2">
                        <option value="Boston Uprising">Boston Uprising</option>
                        <option value="Dallas Fuel">Dallas Fuel</option>
                        <option value="Florida Mayhem">Florida Mayhem</option>
                        <option value="Houston Outlaws">Houston Outlaws</option>
                        <option value="London Spitfire">London Spitfire</option>
                        <option value="Los Angeles Gladiator">Los Angeles Gladiator</option>
                        <option value="Los Angeles Valiant">Los Angeles Valiant</option>
                        <option value="New York Excelsior">New York Excelsior</option>
                        <option value="Philadelphia Fusion">Philadelphia Fusion</option>
                        <option value="San Francisco Shock">San Francisco Shock</option>
                        <option value="Seoul Dynasty">Seoul Dynasty</option>
                        <option value="Shanghai Dragons">Shanghai Dragons</option>
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
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Dorado">Dorado</option>
                        <option value="Hollywood">Hollywood</option>
                        <option value="King\'s Row">King's Row</option>
                        <option value="Numbani">Numbani</option>
                        <option value="Route 66">Route 66</option>
                        <option value="Hanamura">Hanamura</option>
                        <option value="Temple d\'Anubis">Temple d'Anubis</option>
                        <option value="Usine Volskaya">Usine Volskaya</option>
                        <option value="Ilios">Ilios</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Tour de Lijiang">Tour de Lijiang</option>
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
