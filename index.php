<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="src/stylenav.css">
    <link type="text/css" rel="stylesheet" href="src/styleAccueil.css">
    <title>Le petit Vintage</title>
</head>


<body>
  <section class="require">
    <?php require 'nav.php'?>
      <div class="tramme"> <img id="trammeImg" src="src/background/tramme-redim.png" width="100%" height="100%"></div>
  </section>

<section>

</section>

<section class="who">
    <div class="staff-container" ><img id="staff" src="src/Coiffures/bonProfil.jpg" alt="photo de l'équipe"></div>
    <div class="card-who">
        <div class="card-who-header">
            <h2>Qui sommes nous?</h2>
        </div>
        <div class="card-who-body">
            <p class="card-who-text">Passionnée de coiffure depuis toujours, c’est en famille dès l’âge de 16ans que Frédérique Lacroux commence sa formation.
              Son style unique, intemporel et sophistiqué ainsi que sa ténacité et sa rigueur lui permettent d’intégrer dès 2011 l’équipe régionale d’Alsace de coiffure.
              Sacrée Championne de France en coupe stylisée et coiffage en 2004, ce titre lui permet d’intégrer la prestigieuse équipe de France, qu’elle quittera après une victoire éclatante, celle du Grand Prix International en Chignon de Mariée de Prestige, au Mondial Coiffure Beauté.</p>
            <button class="card-who-button"><a href="whoRwe.php">Lire la suite</a></button>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-vintage">
        <div class="card-header">
            <h2>...une coupe vintage ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="vintage-choice">
            <article><img src="src/Coiffures/bonProfil.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/myBad.jpg" height="100%"></article>
            <article><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-classique">
        <div class="card-header">
            <h2>...une coupe classique ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="classique-choice">
            <article><img src="src/Coiffures/pink.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/eiffel65.jpg" height="100%" ></article>
            <article class="color-choise"><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>

<section class="which">
    <div class="card-rebel">
        <div class="card-header">
            <h2>...cheveux rebels ?</h2>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                ncididunt ut labore</p>
        </div>
        <div class="rebel-choice">
            <article><img src="src/Coiffures/curlyPeanut.jpg" height="100%" ></article>
            <article><img src="src/Coiffures/detresse.jpg" height="100%" ></article>
            <article><button class="card-button"><a href="hairstyles.php">voir la suite </a></button></article>
        </div>
    </div>
</section>
<script src="scriptnav.js"></script>
<?php require 'footer.php'?>
</body>
</html>
