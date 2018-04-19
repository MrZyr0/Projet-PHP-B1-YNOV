<?php
    session_start();
    require_once $_SESSION["RacineServ"] . '/src/php/func/selectBackground.php';
?>

<!doctype html>
<html lang="fr" class="html">

    <?php require_once $_SESSION["RacineServ"] . '/src/php/templates/head.php'; ?>

    <body class="page">

        <header class="header">
            <h3>Création de matches</h3>
        </header>

        <div class="body">
            <form class="form-inline" action="createMatchSql.php" method="POST">
                <div class="field-header">
                Equipe 1 :
                </div>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="equipe1">
                <option disabled hidden>Team 1</option>
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
                <div class="field-header">
                Equipe 2 :
                </div>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="equipe2">
                <option disabled hidden>Team 2</option>
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
                <div class="field-header">
                Map :
                </div>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="map">
                <option disabled hidden>Map</option>
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
                <div class="field-header">
                Score Equipe 1 :
                </div>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="scoreEquipe1">
                <option disabled hidden>SCORE Team 1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select>
                <div class="field-header">
                Score Equipe 2 :
                </div>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="scoreEquipe2">
                <option disabled hidden>SCORE Team 2</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select>
                <button type="submit" class="btn btn-primary my-1">Submit</button>
            </form>

            <nav class="menu">
            <a href="/Projet-PHP/src/php/matchManager.php" class="btn">Gestion des Matchs</a>
            <a href="/Projet-PHP/src/php/classement.php" class="btn">Classement</a>
            </nav>
        </div>

        <footer class="footer">
            <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </footer>

    </body>
</html>
