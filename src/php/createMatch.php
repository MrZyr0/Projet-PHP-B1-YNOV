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
          <form class="form-inline">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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

            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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

            <button type="submit" class="btn btn-primary my-1">Submit</button>
          </form>      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romaine LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>