<?php

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
          <h3>Création de matches</h3>
      </header>

      <main role="main" class="inner cover">
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
      </main>
        <a href="gestionMatch.php" class="btn btn-lg btn-secondary">Retour</a>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
